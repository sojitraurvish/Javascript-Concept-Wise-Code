// let x=30;
// let y=40;
// document.write(x*y); //when your variable name get conflict use anonymous function  
// anonimus funcion and with call

(function (){
    let x=30;
    let y=40;
    document.write(x*y);
    })();

    //here we store anonimus funcion into variable and use variable to call function
var x=function(){
    document.write("hellow");
}     
x();