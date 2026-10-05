<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VideoResource\Pages;
use App\Models\Video;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class VideoResource extends Resource
{
    protected static ?string $model = Video::class;
    protected static ?string $navigationGroup = 'Marketing & Nội Dung';
    protected static ?string $navigationIcon = 'heroicon-o-video-camera';
    protected static ?string $navigationLabel = 'Video Trải Nghiệm';
    protected static ?string $pluralModelLabel = 'Danh Sách Video';
    protected static ?int $navigationSort = 6;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->label('Tiêu đề video')
                    ->placeholder('VD: Trải nghiệm cao tốc Sài Gòn - Phan Thiết 2h15p')
                    ->required()
                    ->columnSpanFull(),

                Forms\Components\TextInput::make('youtube_url')
                    ->label('Link Video YouTube')
                    ->placeholder('https://www.youtube.com/watch?v=... hoặc https://youtu.be/...')
                    ->required()
                    ->columnSpanFull(),

                Forms\Components\Textarea::make('description')
                    ->label('Mô tả ngắn gọn')
                    ->rows(2)
                    ->columnSpanFull(),

                Forms\Components\TextInput::make('sort_order')
                    ->label('Thứ tự hiển thị')
                    ->numeric()
                    ->default(0),

                Forms\Components\Toggle::make('is_active')
                    ->label('Hiển thị ra trang chủ')
                    ->default(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->label('Tiêu đề video')->searchable()->weight('bold'),
                Tables\Columns\TextColumn::make('youtube_url')->label('Link YouTube')->limit(30),
                Tables\Columns\IconColumn::make('is_active')->label('Hiển thị')->boolean(),
                Tables\Columns\TextColumn::make('sort_order')->label('Thứ tự')->sortable(),
                Tables\Columns\TextColumn::make('created_at')->label('Ngày tạo')->date('d/m/Y'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListVideos::route('/'),
            'create' => Pages\CreateVideo::route('/create'),
            'edit' => Pages\EditVideo::route('/{record}/edit'),
        ];
    }
}
