<style>
body{
	font-family:arial;
}
.show{
	display:block;
}
.hide{
	display:none;
}
.not_active{
	text-decoration:none;
}

#tabs_link {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}
#tabs_link a {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
  color:black;
}
.tab_box {
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}

</style>

<div id="tabs_link">
	<a href="javascript:void(0)" id="test1" class="tab">Test1</a>
	<a href="javascript:void(0)" id="test2" class="tab not_active">Test2</a>
	<a href="javascript:void(0)" id="test3" class="tab not_active">Test3</a>
</div>

<div id="box_test1" class="tab_box">
	Test1 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mollis laoreet enim mattis pretium. Aliquam semper ligula at dolor imperdiet, ut hendrerit sem pretium. Curabitur ut tempus nisl, nec sagittis nibh. Donec a posuere tortor, at lobortis nisl. Donec a lobortis turpis. Suspendisse potenti. Sed vel eleifend felis. Etiam pretium faucibus vulputate. Integer nulla velit, egestas interdum imperdiet ut, laoreet sit amet felis. Proin eget ex eros. Pellentesque accumsan ornare commodo. Curabitur ut nibh imperdiet, lobortis ligula ac, placerat ex.


</div>
<div id="box_test2" class="tab_box hide">
	Test2 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mollis laoreet enim mattis pretium. Aliquam semper ligula at dolor imperdiet, ut hendrerit sem pretium. Curabitur ut tempus nisl, nec sagittis nibh. Donec a posuere tortor, at lobortis nisl. Donec a lobortis turpis. Suspendisse potenti. Sed vel eleifend felis. Etiam pretium faucibus vulputate. Integer nulla velit, egestas interdum imperdiet ut, laoreet sit amet felis. Proin eget ex eros. Pellentesque accumsan ornare commodo. Curabitur ut nibh imperdiet, lobortis ligula ac, placerat ex.


</div>
<div id="box_test3" class="tab_box hide">
	Test3 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mollis laoreet enim mattis pretium. Aliquam semper ligula at dolor imperdiet, ut hendrerit sem pretium. Curabitur ut tempus nisl, nec sagittis nibh. Donec a posuere tortor, at lobortis nisl. Donec a lobortis turpis. Suspendisse potenti. Sed vel eleifend felis. Etiam pretium faucibus vulputate. Integer nulla velit, egestas interdum imperdiet ut, laoreet sit amet felis. Proin eget ex eros. Pellentesque accumsan ornare commodo. Curabitur ut nibh imperdiet, lobortis ligula ac, placerat ex.


</div>

<script>
let tab=document.querySelector('#tabs_link');
tab.addEventListener('click',function(e){
	let id=e.target.id;
	
	let ele=document.querySelectorAll('.tab_box');
	let len=ele.length;
	for(let x=0;x<len;x++){
		ele[x].classList.add('hide');
	}
	document.querySelector('#box_'+id).classList.remove('hide');
	
	
	let tab_ele=document.querySelectorAll('.tab');
	let tab_len=tab_ele.length;
	for(let x=0;x<tab_len;x++){
		tab_ele[x].classList.add('not_active');
	}
	document.querySelector('#'+id).classList.remove('not_active');
	
});


</script>