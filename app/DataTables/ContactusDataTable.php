<?php

namespace App\DataTables;

use App\Models\Contactus;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class ContactusDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->setRowId('id')
            ->editColumn('email', function (Contactus $contactus) {
                return view('dashboard.pages.contactus.components.mail-to-url', compact('contactus'));
            })
            ->editColumn('is_replied', fn(Contactus $contactus) => $contactus->is_replied ? 'replied' : 'not replied')
            ->editColumn('created_at', fn(Contactus $contactus) => $contactus->created_at->diffForHumans())
            ->addColumn('action', function (Contactus $contactus) {
                return view('dashboard.pages.contactus.components.actions', compact('contactus'));
            });
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Contactus $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('contactus-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            //->dom('Bfrtip')
            ->orderBy(1)
            ->parameters([
                'dom' => 'Bfrtip',
                'buttons' => ['export', 'print', 'reset', 'reload'],
            ])
            ->selectStyleSingle();
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [

            Column::make('id'),
            Column::make('name'),
            Column::make('email'),
            Column::make('message'),
            Column::make('is_replied'),
            Column::make('created_at'),
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->width(60)
                ->addClass('text-center'),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Contactus_' . date('YmdHis');
    }
}
