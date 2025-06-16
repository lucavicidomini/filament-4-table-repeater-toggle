<?php

namespace App\Filament\Resources\Samples\Schemas;

use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Repeater\TableColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Illuminate\Support\HtmlString;

class SampleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(1)
            ->components([
                TextInput::make('name'),
                Repeater::make('data')
                    ->aboveLabel([
                        new HtmlString('The repeater below will not render the toggle in column "Enabled". However, if you shrink your browser to a mobile width, the table repeater will render as a normal repeater and the toggle will show.'),
                        new HtmlString('I think the culprit is this piece of CSS not considering the fact that toggle controls are wrapped in a <code>.fi-fo-field-label-col</code>:'),
                        new HtmlString('<pre>@supports (container-type:inline-size) {
    @container (min-width:36rem) {
        .fi-fo-table-repeater>table>tbody>tr>td .fi-fo-field-label-col {
            display: none;
        }
    }</pre>')
                    ])
                    ->table([
                        TableColumn::make('Enabled'),
                        TableColumn::make('Name'),
                    ])
                    ->schema([
                        Toggle::make('enabled'),
                        TextInput::make('name'),
                    ])
            ]);
    }
}
