Route::get('/store',function(){
  //---Store
   $url=route('products.store');
   echo "<form action='$url' method='POST'>";  
   echo "<input type='hidden' name='_token' value='".csrf_token()."'>";
   echo "<input type='submit' value='Submit' /></form>";

});

Route::get('/update',function(){
//---Update
  $url=route('products.update',1);
  echo "<form action='$url' method='POST'>";
  echo "<input type='hidden' name='_method' value='PUT'>";
  echo "<input type='hidden' name='_token' value='".csrf_token()."'>";
  echo "<input type='submit' value='Submit' /></form>";

});

Route::get('/delete',function(){  

  //---Delete
  $url=route('products.destroy',1);
  echo "<form action='$url' method='POST'>";
  echo "<input type='hidden' name='_method' value='DELETE'>";
  echo "<input type='hidden' name='_token' value='".csrf_token()."'>";
  echo "<input type='submit' value='Submit' /></form>";


});

//------GET-------
//products
//products/1
//products/create
//products/1/edit

Route::resource('products',ProductContr
