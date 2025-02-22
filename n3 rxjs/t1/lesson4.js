// there are still lo of ways we can create observable 

// by we do Observable of which allow us to pass any static values we want

const mashup = Rx.Observable.of("anything",["you","want"],13,true,{cool:"stuff"})

const count=0;
mashup.subscribe(val=>console.log(val))