// now let say we want to create observable from click events in the dom

const clicks= Rx.Observable.fromEvent(document,"click")

clicks.subscribe(click=> console.log(click))