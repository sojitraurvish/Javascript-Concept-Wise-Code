// takeWhile - this will tell observable to emit value until certain condition get true

const names = Rx.Observable.of(["urvish","jay","loy","toy"])


names  
    .takeWhile(name=> name!=="loy")
    .finally(()=>console.log("complete i found loy"))
    .subscribe(i=> console.log(i))