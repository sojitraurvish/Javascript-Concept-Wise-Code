// how to complete the observable
// when observable reaches to end of it life cycle it will send the completed single we can see this with timer using the finally operator will will run the code once the observable is completed

const timer = Rx.Observable.timer(1000)

timer
    .finally(()=>console.log("All Done!"))
    .subscribe((x)=>console.log(x)) 

    // however there are other observables that wan't complete automatically amd in some cases it leads to memory leaks if it is very data intensive stream