<?php
namespace App\DataTables;

use App\Models\KategoriModel;
use Illuminate\Database\Eloquent\Builder as QueryBuilder; use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder; use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor; use Yajra\DataTables\Html\Editor\Fields; use Yajra\DataTables\Services\DataTable;

class KategoriDataTable extends DataTable
{
/**
*	Build the DataTable class.
*
*	@param QueryBuilder $query Results from query() method.
*/
public function dataTable(QueryBuilder $query): EloquentDataTable
{
return (new EloquentDataTable($query))
->addColumn('action', function ($row) {
    $editUrl = route('kategori.edit', $row->kategori_id);
    $deleteUrl = route('kategori.destroy', $row->kategori_id);

    return '
        <a href="'.$editUrl.'" class="btn btn-warning btn-sm">Edit</a>
        <form action="'.$deleteUrl.'" method="POST" style="display:inline;">
            '.csrf_field().'
            '.method_field("DELETE").'
            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm(\'Apakah Anda yakin ingin menghapus data ini?\')">Delete</button>
        </form>
    ';
    
})

->setRowId('kategori_id');
}

/**
*	Get the query source of dataTable.
*/
public function query(KategoriModel $model): QueryBuilder
{
    return $model->newQuery()->select('kategori_id', 'kategori_kode','kategori_nama','created_at','updated_at');
}


/**
*	Optional method if you want to use the html builder.
*/
public function html(): HtmlBuilder
{
return $this->builder()
->setTableId('kategori-table')
->columns($this->getColumns())
->minifiedAjax()
//->dom('Bfrtip')
->orderBy(1)
->selectStyleSingle()
->buttons([
Button::make('excel'),
Button::make('csv'),
Button::make('pdf'),
Button::make('print'),
Button::make('reset'), Button::make('reload')
]);
}

/**
*	Get the dataTable columns definition.
*/
public function getColumns(): array
{
    return [
        'kategori_kode' => ['title' => 'Kategori Kode'],
        'kategori_nama' => ['title' => 'Kategori Nama'],
        'created_at' => ['title' => 'Created At'],
        'updated_at' => ['title' => 'Updated At'],
        'action' => ['title' => 'Action', 'searchable' => false, 'orderable' => false],
    ];
}

/**
*	Get the filename for export.
*/
protected function filename(): string
{
return 'Kategori_' . date('YmdHis');
}
}
