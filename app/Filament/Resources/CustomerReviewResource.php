<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CustomerReviewResource\Pages;
use App\Models\CustomerReview;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class CustomerReviewResource extends Resource
{
    protected static ?string $model = CustomerReview::class;
    protected static ?string $navigationGroup = 'Marketing & Nội Dung';
    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-bottom-center-text';
    protected static ?string $navigationLabel = 'Trải Nghiệm Khách Hàng';
    protected static ?string $pluralModelLabel = 'Danh Sách Trải Nghiệm Khách Hàng';
    protected static ?string $modelLabel = 'Đánh Giá';
    protected static ?int $navigationSort = 7;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('customer_name')
                    ->label('Tên Khách Hàng')
                    ->placeholder('VD: David Miller')
                    ->required(),

                Forms\Components\TextInput::make('country')
                    ->label('Quốc Tịch (Nước)')
                    ->placeholder('VD: United Kingdom 🇬🇧')
                    ->required(),

                Forms\Components\TextInput::make('route_name')
                    ->label('Tuyến Đường Trải Nghiệm')
                    ->placeholder('VD: Saigon SGN Airport ➔ Mui Ne Resort'),

                Forms\Components\Select::make('rating')
                    ->label('Số Sao Đánh Giá')
                    ->options([
                        5 => '⭐⭐⭐⭐⭐ (5 Sao)',
                        4 => '⭐⭐⭐⭐ (4 Sao)',
                        3 => '⭐⭐⭐ (3 Sao)',
                    ])
                    ->default(5)
                    ->required(),

                // ĐÃ BỔ SUNG CHỌN NHIỀU ẢNH TẠI ĐÂY
                Forms\Components\FileUpload::make('image')
                    ->label('Hình Ảnh Trải Nghiệm Thực Tế (Chọn nhiều ảnh)')
                    ->image()
                    ->multiple()
                    ->reorderable()
                    ->directory('customer-reviews')
                    ->columnSpanFull(),

                Forms\Components\Textarea::make('review_text')
                    ->label('Nội Dung Đánh Giá / Mô Tả Trải Nghiệm')
                    ->placeholder('VD: Dịch vụ xe riêng tuyệt vời! Tài xế đúng giờ, xe sạch sẽ...')
                    ->rows(3)
                    ->required()
                    ->columnSpanFull(),

                Forms\Components\TextInput::make('sort_order')
                    ->label('Thứ Tự Hiển Thị')
                    ->numeric()
                    ->default(0),

                Forms\Components\Toggle::make('is_active')
                    ->label('Hiển Thị Ra Trang Chủ')
                    ->default(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')->label('Hình Ảnh')->circular()->stacked(),
                Tables\Columns\TextColumn::make('customer_name')->label('Khách Hàng')->searchable()->weight('bold'),
                Tables\Columns\TextColumn::make('country')->label('Quốc Tịch'),
                Tables\Columns\TextColumn::make('route_name')->label('Tuyến Đường'),
                Tables\Columns\TextColumn::make('rating')->label('Số Sao')->formatStateUsing(fn ($state) => str_repeat('⭐', $state)),
                Tables\Columns\IconColumn::make('is_active')->label('Hiển Thị')->boolean(),
                Tables\Columns\TextColumn::make('sort_order')->label('Thứ Tự')->sortable(),
            ])
            ->actions([
                Tables\Actions\EditAction::make()->label('Sửa'),
                Tables\Actions\DeleteAction::make()->label('Xóa'),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCustomerReviews::route('/'),
            'create' => Pages\CreateCustomerReview::route('/create'),
            'edit' => Pages\EditCustomerReview::route('/{record}/edit'),
        ];
    }
}