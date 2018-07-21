<?php



if ( !function_exists('monthNumberToMonthName') ) {

  function monthNumberToMonthName($monthNumber) {
    $monthName = "";

    switch ($monthNumber) {
      case 1:
        $monthName = trans('app.archive_months.january');
        break;
      case 2:
        $monthName = trans('app.archive_months.february');
        break;
      case 3:
        $monthName = trans('app.archive_months.march');
        break;
      case 4:
        $monthName = trans('app.archive_months.april');
        break;
      case 5:
        $monthName = trans('app.archive_months.may');
        break;
      case 6:
        $monthName = trans('app.archive_months.june');
        break;
      case 7:
        $monthName = trans('app.archive_months.july');
        break;
      case 8:
        $monthName = trans('app.archive_months.august');
        break;
      case 9:
        $monthName = trans('app.archive_months.september');
        break;
      case 10:
        $monthName = trans('app.archive_months.october');
        break;
      case 11:
        $monthName = trans('app.archive_months.november');
        break;
      case 12:
        $monthName = trans('app.archive_months.december');
        break;
    }

    return $monthName;
  }
}

if ( !function_exists('increaseViewsNumber') ) {
  function increaseViewsNumber($post_id) {
    $post = App\Post::find($post_id);
    $post->views += 1;
    $post->save();
  }
}