<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Models\Post;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;
    protected static ?string $navigationGroup = 'Marketing & Nội Dung';
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $navigationLabel = 'Bài Viết & Cẩm Nang';
    protected static ?string $pluralModelLabel = 'Danh Sách Bài Viết';
    protected static ?string $modelLabel = 'Bài Viết';
    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Nội Dung Bài Viết')
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->label('Tiêu Đề Bài Viết')
                            ->placeholder('VD: Kinh nghiệm đi xe Sài Gòn Mũi Né cao tốc mới')
                            ->required()
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn (string $operation, $state, Forms\Set $set) => $operation === 'create' ? $set('slug', Str::slug($state)) : null),

                        Forms\Components\TextInput::make('slug')
                            ->label('Đường Dẫn Tĩnh (Slug)')
                            ->required()
                            ->unique(Post::class, 'slug', ignoreRecord: true),

                        Forms\Components\Select::make('category_id')
                            ->label('Chuyên Mục')
                            ->relationship('category', 'name')
                            ->required(),

                        Forms\Components\Textarea::make('summary')
                            ->label('Tóm Tắt Ngắn')
                            ->rows(3),

                        Forms\Components\RichEditor::make('content')
                            ->label('Nội Dung Chi Tiết')
                            ->required()
                            ->columnSpanFull(),
                    ])->columns(2),

                Forms\Components\Section::make('Cài Đặt Xuất Bản')
                    ->schema([
                        Forms\Components\FileUpload::make('thumbnail')
                            ->label('Ảnh Đại Diện Bài Viết')
                            ->image()
                            ->directory('posts'),

                        Forms\Components\Toggle::make('is_published')
                            ->label('Xuất Bản Công Khai')
                            ->default(true),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('thumbnail')->label('Ảnh Đại Diện'),
                Tables\Columns\TextColumn::make('title')->label('Tiêu Đề')->searchable()->weight('bold')->limit(40),
                Tables\Columns\TextColumn::make('category.name')->label('Chuyên Mục')->badge(),
                Tables\Columns\IconColumn::make('is_published')->label('Đã Xuất Bản')->boolean(),
                Tables\Columns\TextColumn::make('created_at')->label('Ngày Đăng')->date('d/m/Y'),
            ])
            ->actions([
                Tables\Actions\EditAction::make()->label('Sửa'),
                Tables\Actions\DeleteAction::make()->label('Xóa'),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
