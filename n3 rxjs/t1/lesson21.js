// Rx js Subject 

// a subject is just an observable but with some extra bonus feature
// it has ability to emit new data to it there subscriber by acting as proxy to some other data source   

const subject = Rx.Subject.of("Hello")

const subA=subject(val => console.log(`Sub A: ${val}`))
const subB=subject(val => console.log(`Sub A: ${val}`))

// but here real banifit to it that we can call next to it