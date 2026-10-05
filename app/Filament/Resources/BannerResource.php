<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BannerResource\Pages;
use App\Models\Banner;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class BannerResource extends Resource
{
    protected static ?string $model = Banner::class;
    protected static ?string $navigationGroup = 'Marketing & Nội Dung';
    protected static ?string $navigationIcon = 'heroicon-o-photo';
    protected static ?string $navigationLabel = 'Ảnh Bìa / Banner';
    protected static ?string $pluralModelLabel = 'Danh Sách Banner';
    protected static ?string $modelLabel = 'Banner';
    protected static ?int $navigationSort = 5;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->label('Tiêu Đề Banner')
                    ->placeholder('VD: Xe Riêng Đời Mới Sài Gòn ⇄ Mũi Né')
                    ->required()
                    ->columnSpanFull(),

                Forms\Components\Textarea::make('description')
                    ->label('Mô Tả Phụ')
                    ->placeholder('VD: Chạy trọn tuyến cao tốc chỉ 2h15 phút. Đón trả tận nơi...')
                    ->rows(3)
                    ->columnSpanFull(),

                Forms\Components\FileUpload::make('image')
                    ->label('Hình Ảnh Bìa')
                    ->image()
                    ->directory('banners')
                    ->columnSpanFull(),

                Forms\Components\Toggle::make('is_active')
                    ->label('Kích Hoạt Hiển Thị Ra Trang Chủ')
                    ->default(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')->label('Hình Ảnh'),
                Tables\Columns\TextColumn::make('title')->label('Tiêu Đề')->searchable()->weight('bold'),
                Tables\Columns\IconColumn::make('is_active')->label('Hiển Thị')->boolean(),
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
            'index' => Pages\ListBanners::route('/'),
            'create' => Pages\CreateBanner::route('/create'),
            'edit' => Pages\EditBanner::route('/{record}/edit'),
        ];
    }
}
