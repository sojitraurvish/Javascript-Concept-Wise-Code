async function always return promise if you do not return it will automatically rape it in promise
and if i have two await then it will start execution together but will be served one after another in linear fation


interable
promise.all([p1,p2,p3]) 
	     3s 2s 5s
			
success: all three promise get call paraler and entire promise.all take maximum 5 seconds to resole  
error: as soon as any of three get rejected promise.all throws error if p2 get rejected
that it take 2s then promise.all do not wait for others to fulfill

promise.allsettled 

success: work as prmise.all
error: if any of one get rejected so it will wait for others to be fulfilled


promise.race([p1,p2,p3]): return the result of first settled promise weather it resoled or rejected
	      3s 1s 2s

success: as soon as any of the promise get result then it will give only that result
like p2 will be return if it will fail then also it return result
result[p1,error1,p3]


promise.any(p1,p2,p3) wait for first promise to get success
	    3s,1s,2s
if p2 get rejected then it wait for p3 and if it resolved then it will return p2
but what if all get rejected then it will return array of aggregated error