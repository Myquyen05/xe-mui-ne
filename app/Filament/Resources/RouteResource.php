<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RouteResource\Pages;
use App\Models\Route;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class RouteResource extends Resource
{
    protected static ?string $model = Route::class;
    protected static ?string $navigationGroup = 'Quản Lý Tuyến & Giá';
    protected static ?string $navigationIcon = 'heroicon-o-map-pin';
    protected static ?string $navigationLabel = 'Tuyến Đường & Bảng Giá';
    protected static ?string $pluralModelLabel = 'Danh Sách Tuyến Xe';
    protected static ?string $modelLabel = 'Tuyến Đường';
    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Thông Tin Tuyến')
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->label('Tên Tuyến Xe')
                            ->placeholder('VD: Mũi Né - Sài Gòn')
                            ->required()
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn (string $operation, $state, Forms\Set $set) => $operation === 'create' ? $set('slug', Str::slug($state)) : null),

                        Forms\Components\TextInput::make('slug')
                            ->label('Đường Dẫn Tĩnh (Slug)')
                            ->required()
                            ->unique(Route::class, 'slug', ignoreRecord: true),

                        Forms\Components\TextInput::make('origin')
                            ->label('Điểm Đi')
                            ->required(),

                        Forms\Components\TextInput::make('destination')
                            ->label('Điểm Đến')
                            ->required(),

                        Forms\Components\TextInput::make('distance')
                            ->label('Khoảng Cách (km)')
                            ->placeholder('VD: 180 - 220 km'),

                        Forms\Components\TextInput::make('duration')
                            ->label('Thời Gian Di Chuyển')
                            ->placeholder('VD: 2 - 3 giờ'),
                    ])->columns(2),

                Forms\Components\Section::make('Giá Vé Trọn Gói (VNĐ)')
                    ->schema([
                        Forms\Components\TextInput::make('price_4c')
                            ->label('Giá Xe 4 Chỗ')
                            ->numeric()
                            ->required()
                            ->suffix('đ'),

                        Forms\Components\TextInput::make('price_7c')
                            ->label('Giá Xe 7 Chỗ')
                            ->numeric()
                            ->required()
                            ->suffix('đ'),

                        Forms\Components\TextInput::make('price_16c')
                            ->label('Giá Xe 16 Chỗ')
                            ->numeric()
                            ->required()
                            ->suffix('đ'),

                        Forms\Components\Toggle::make('is_popular')
                            ->label('Đánh Dấu Tuyến Nổi Bật (Hot)')
                            ->default(false),
                    ])->columns(3),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->label('Tên Tuyến')->searchable()->weight('bold'),
                Tables\Columns\TextColumn::make('price_4c')->label('Xe 4C')->money('VND')->sortable(),
                Tables\Columns\TextColumn::make('price_7c')->label('Xe 7C')->money('VND')->sortable(),
                Tables\Columns\TextColumn::make('price_16c')->label('Xe 16C')->money('VND')->sortable(),
                Tables\Columns\IconColumn::make('is_popular')->label('Tuyến Hot')->boolean(),
            ])
            ->actions([
                Tables\Actions\EditAction::make()->label('Sửa'),
                Tables\Actions\DeleteAction::make()->label('Xóa'),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListRoutes::route('/'),
            'create' => Pages\CreateRoute::route('/create'),
            'edit' => Pages\EditRoute::route('/{record}/edit'),
        ];
    }
}
