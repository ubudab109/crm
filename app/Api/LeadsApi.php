<?php
namespace App\Api;

use App\Source;
/**
 * Kelas ini digunakan untuk berinteraksi dengan table leads
 */
class LeadsApi extends SourceApi
{

  public function insert(array $values, $status = 'leads')
  {
    parent::insert($values, 'leads');
  }

  public function getAll($rowPerPage = null)
  {
    if (!$rowPerPage) {
      return Source::where('status','leads')->get();
    }
    return Source::where('status','leads')->paginate($rowPerPage);
  }

  public function exchange($id)
  {
    $source = Source::find($id);
    $source->status = 'customer';
    $source->save();
    return $source;
  }
}
