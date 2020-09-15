<?php

return function ($site) {

  // get all spectacles
  $spectacles = $site->index()->filterBy('template', 'spectacle'); 
  $spectaclesClean = [];
  foreach($spectacles->sortBy('datesFormatted', 'asc') as $spectacle){
  	if($spectacle->billeterie()->isNotEmpty() && $spectacle->parent()->uid() != "archives"){
  		array_push($spectaclesClean, $spectacle);
  	}
  }
  // $spectacles = $site->index()->findBy('uid', 'spectacles')->children()->listed();

  // pass $spectacles to the template
  return [
    'spectacles' => $spectaclesClean,
  ];

};