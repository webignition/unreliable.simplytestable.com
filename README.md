unreliable.simplytestable.com
=============================

Simulate unreliable HTTP services. Pseudo-randomly encounter HTTP errors and very
long response times.

Useful if you're application consumes HTTP resources and you need to test:

- how your application handles unexpected HTTP errors
- how your application handles very long response times (does your application time
out gracefully?)

Full of lovely fun features:

- generate chosen error-related HTTP status codes with a chosen probability of occurring
- encounter chosen response times with a chosen probability of occurring

## Generating HTTP errors

50% chance of getting a HTTP 503 error:<br>
http://unreliable.simplytestable.com/?error=503&probability=0.5

20% chance of getting a HTTP 404 error:<br>
http://unreliable.simplytestable.com/?error=404&probability=0.2

60% chance of getting a HTTP 500 error:<br>
http://unreliable.simplytestable.com/?error=500&probability=0.6

100% chance of getting a HTTP 409 error:<br>
http://unreliable.simplytestable.com/?error=409&probability=1

0% chance of getting a HTTP 403 error:<br>
http://unreliable.simplytestable.com/?error=403&probability=0

## Generating very long HTTP response delays

100% chance of a 1 second response time:<br>
http://unreliable.simplytestable.com/timeout/?timeout-delay=1&probability=1

50% chance of a 10 second response time:<br>
http://unreliable.simplytestable.com/timeout/?timeout-delay=10&probability=1

20% chance of a 300 second (5 minute) response time:<br>
http://unreliable.simplytestable.com/timeout/?timeout-delay=300&probability=0.2
