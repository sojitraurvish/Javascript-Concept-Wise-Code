// .multicast()
// it use to send values to multiple subscribers but not any related side effects 

// so if we have 100 subscribers and all trigger mouse event 100 time then our code will run (100 * 100) 10000 times
// and to avoid that we have .multicast

const observable = Rx.Observable.fromEvent(document,"click")

const click = observable
                    .do(_ => console.log('Do one Time!'))

                    
const subject = clicks.multicast(()=> new Rx.Subject())

const subA = subject.subscribe(c=> console.log(`Sub A: ${c.timeStamp}`))
const subB = subject.subscribe(c=> console.log(`Sub B: ${c.timeStamp}`))

subject.connect();