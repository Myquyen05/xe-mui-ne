<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LeadResource\Pages;
use App\Models\Lead;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class LeadResource extends Resource
{
    protected static ?string $model = Lead::class;
    protected static ?string $navigationGroup = 'Vận Hành & Đặt Xe';
    protected static ?string $navigationIcon = 'heroicon-o-inbox-stack';
    protected static ?string $navigationLabel = 'Yêu Cầu Đặt Xe (Leads)';
    protected static ?string $pluralModelLabel = 'Danh Sách Yêu Cầu Đặt Xe';
    protected static ?string $modelLabel = 'Yêu Cầu Đặt Xe';
    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Thông Tin Hành Khách')
                    ->schema([
                        Forms\Components\TextInput::make('customer_name')
                            ->label('Họ Tên Khách Hàng')
                            ->required(),
                        Forms\Components\TextInput::make('phone')
                            ->label('Số Điện Thoại / Zalo')
                            ->required(),
                    ])->columns(2),

                Forms\Components\Section::make('Lộ Trình & Điều Xe')
                    ->schema([
                        Forms\Components\TextInput::make('pickup_point')
                            ->label('Điểm Đón')
                            ->required()
                            ->columnSpanFull(),
                        Forms\Components\TextInput::make('dropoff_point')
                            ->label('Điểm Đến')
                            ->required()
                            ->columnSpanFull(),
                        Forms\Components\DateTimePicker::make('pickup_time')
                            ->label('Thời Gian Đón')
                            ->required(),
                        Forms\Components\Select::make('car_type')
                            ->label('Loại Xe')
                            ->options([
                                '4c' => 'Xe 4 Chỗ',
                                '7c' => 'Xe 7 Chỗ',
                                '16c' => 'Xe 16 Chỗ',
                                'convenient' => 'Xe Tiện Chuyến',
                            ])
                            ->required(),
                        Forms\Components\Select::make('status')
                            ->label('Trạng Thái Đơn')
                            ->options([
                                'new' => 'Mới nhận đơn',
                                'contacted' => 'Đang đợi / Đã gọi xác nhận',
                                'completed' => 'Hoàn thành chuyến đi',
                                'cancelled' => 'Đã hủy chuyến',
                            ])
                            ->default('new')
                            ->required(),
                        Forms\Components\Textarea::make('note')
                            ->label('Ghi Chú Yêu Cầu')
                            ->columnSpanFull(),
                    ])->columns(3),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('customer_name')
                    ->label('Khách Hàng')
                    ->searchable()
                    ->weight('bold'),
                Tables\Columns\TextColumn::make('phone')
                    ->label('SĐT / Zalo')
                    ->searchable()
                    ->copyable(),
                Tables\Columns\TextColumn::make('pickup_point')
                    ->label('Điểm Đón')
                    ->limit(20)
                    ->tooltip(fn ($record): ?string => $record->pickup_point),
                Tables\Columns\TextColumn::make('dropoff_point')
                    ->label('Điểm Đến')
                    ->limit(20)
                    ->tooltip(fn ($record): ?string => $record->dropoff_point),
                Tables\Columns\TextColumn::make('pickup_time')
                    ->label('Giờ Đón')
                    ->dateTime('d/m/Y H:i')
                    ->sortable(),
                Tables\Columns\TextColumn::make('car_type')
                    ->label('Loại Xe')
                    ->badge()
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        '4c' => '4 Chỗ',
                        '7c' => '7 Chỗ',
                        '16c' => '16 Chỗ',
                        'convenient' => 'Tiện Chuyến',
                        default => $state,
                    })
                    ->color('info'),
                Tables\Columns\SelectColumn::make('status')
                    ->label('Trạng Thái (Chọn Nhanh)')
                    ->options([
                        'new' => 'Mới nhận đơn',
                        'contacted' => 'Đang đợi / Đã liên hệ',
                        'completed' => 'Hoàn thành',
                        'cancelled' => 'Đã hủy',
                    ]),
            ])
            ->defaultSort('created_at', 'desc')
            ->actions([
                Tables\Actions\EditAction::make()->label('Sửa'),
                Tables\Actions\DeleteAction::make()->label('Xóa'),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListLeads::route('/'),
            'create' => Pages\CreateLead::route('/create'),
            'edit' => Pages\EditLead::route('/{record}/edit'),
        ];
    }
}
