// but here real banifit to it that we can call next to it that you can not do with normal observable

const subject = new Rx.Subject()

const subA = subject.subscribe(val => console.log(`Sub A: ${val}`))
const subB = subject.subscribe(val => console.log(`Sub B: ${val}`))

subject.next('Hello')

setTimeout(()=>{
    subject.next("world")
},1000)