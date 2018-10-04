 
<div class=" col-sm-6  ">
 
 <div class="form-group col-sm-12">
 <h1>ar </h1> </div>
<!-- Last Updated By Field -->
<div class="form-group col-sm-6">
    {!! Form::label('slug', 'slug:') !!}
		 	  <input type="text" name="slug_ar" class="form-control" value="<?php if (isset($services_ar )){echo" $services_ar->slug ";} ?>">

 </div>
<div class="form-group col-sm-6">
    {!! Form::label('title', 'title:') !!}
			 	  <input type="text" name="title_ar" class="form-control" value="<?php if (isset($services_ar )){echo" $services_ar->title ";} ?>">

 </div>




<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'description:') !!}
	 <textarea name="description_ar" class="form-control"   >  <?php if (isset($services_ar )){echo" $services_ar->description ";} ?> </textarea>

 </div>



 </div>

 
  
<div class=" col-sm-6  ">
 
 <div class="form-group col-sm-12">
 <h1>en </h1> </div>
<!-- Last Updated By Field -->
<div class="form-group col-sm-6">
    {!! Form::label('slug', 'slug:') !!}
	 	  <input type="text" name="slug_en" class="form-control" value="<?php if (isset($services_en )){echo" $services_en->slug ";} ?>">

 </div>
<div class="form-group col-sm-6">
    {!! Form::label('title', 'title:') !!}
	
 	  <input type="text" name="title_en" class="form-control" value="<?php if (isset($services_en )){echo" $services_en->title ";} ?>">
</div>




<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'description:') !!}
 <textarea name="description_en" class="form-control"   >  <?php if (isset($services_en )){echo" $services_en->description ";} ?> </textarea>

 </div>



 </div>
 
<div class="form-group col-sm-6">
 
	  {!! Form::label('image', 'image :') !!}
    {!! Form::file('image') !!}
</div>
 
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('services.index') !!}" class="btn btn-default">Cancel</a>
</div>


