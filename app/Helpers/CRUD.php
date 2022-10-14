<?php

if (!function_exists('bilangHello')) {
	function bilangHello($nama){
		return 'Helper Globals Cobaa ' . $nama;
	}
}


// EDIT OR ADD DATA PROPERTI
if(!function_exists('editAddProperties')){
	function editAddProperties($request )
	{
		// Validation
		// ==================



		class DataClass {
			public $tittle,
					$desc,
					$id;
			  function __construct($tittle , $desc , $id)
			  {
			    $this->tittle = $tittle;
			    $this->desc = $desc;
			    $this->id = $id;
			  }
		};
		$tittle = $request->input('tittle');
        $desc = $request->input('desc');
        $id = $request->input('id');

		$datas = new DataClass($tittle, $desc , $id);
		
        return  $datas;

	}

}
if(!function_exists('getId')){
	function getId($request)
	{
		class DataClass {
			public $id
			;
			  function __construct($id)
			  {
			    $this->id = $id;
			  }
		};
        $id = $request->input('id');
		$datas = new DataClass($id);
		
        return  $datas->id;
	}

}
// Validation Do
if (!function_exists('validationForms')) {

	function validationForms($request){
        $validation = $request->validate([
            'tittle' => 'required|min:10',
            'desc' => 'required|min:20'
		]);
		return $validation;

	}
}