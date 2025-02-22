// .do - this will allow us to execute the code without affecting the underline(original value) observable

const names = Rx.Observable.of("urvish","jay")

names   
    .do(name=> console.log(name))
    .map(name=> name.toUpperCase())
    .do(name=>console.log(name))
    .subscribe()

