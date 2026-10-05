<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CategoryResource\Pages;
use App\Models\Category;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class CategoryResource extends Resource
{
    protected static ?string $model = Category::class;
    protected static ?string $navigationGroup = 'Marketing & Nội Dung';
    protected static ?string $navigationIcon = 'heroicon-o-folder';
    protected static ?string $navigationLabel = 'Chuyên Mục';
    protected static ?string $pluralModelLabel = 'Danh Sách Chuyên Mục';
    protected static ?string $modelLabel = 'Chuyên Mục';
    protected static ?int $navigationSort = 4;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Tên Chuyên Mục')
                    ->placeholder('VD: Cẩm Nang Du Lịch')
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn (string $operation, $state, Forms\Set $set) => $operation === 'create' ? $set('slug', Str::slug($state)) : null),

                Forms\Components\TextInput::make('slug')
                    ->label('Đường Dẫn Tĩnh (Slug)')
                    ->required()
                    ->unique(Category::class, 'slug', ignoreRecord: true),

                Forms\Components\Select::make('type')
                    ->label('Loại Chuyên Mục')
                    ->options([
                        'blog' => 'Bài Viết / Tin Tức',
                        'service' => 'Dịch Vụ Vận Tải',
                    ])
                    ->default('blog')
                    ->required(),

                Forms\Components\Textarea::make('description')
                    ->label('Mô Tả Ngắn')
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->label('Tên Chuyên Mục')->searchable()->weight('bold'),
                Tables\Columns\TextColumn::make('slug')->label('Đường Dẫn'),
                Tables\Columns\TextColumn::make('type')->label('Loại')
                    ->badge()
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        'blog' => 'Bài Viết',
                        'service' => 'Dịch Vụ',
                        default => $state,
                    })
                    ->color('info'),
                Tables\Columns\TextColumn::make('created_at')->label('Ngày Tạo')->date('d/m/Y'),
            ])
            ->actions([
                Tables\Actions\EditAction::make()->label('Sửa'),
                Tables\Actions\DeleteAction::make()->label('Xóa'),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCategories::route('/'),
            'create' => Pages\CreateCategory::route('/create'),
            'edit' => Pages\EditCategory::route('/{record}/edit'),
        ];
    }
}
