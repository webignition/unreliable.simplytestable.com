unreliable.simplytestable.com
=============================

Generate chosen error-related HTTP status codes with a chosen probability of occurring, part of the test suite used by simplytestable.com

A spot of rudimentary content is returned plus either a 200 OK or an error-related HTTP status code (depending on the probability you chose and some luck).

## Choosing the error to return

Use the 'error' query string parameter to specify the HTTP status code to use:

- http://unreliable.simplytestable.com/?error=404&probability=1
- http://unreliable.simplytestable.com/?error=500&probability=1
- http://unreliable.simplytestable.com/?error=503&probability=1

Use the 'probability' query string parameter to specify the probability of the chosen error being retruned:

- http://unreliable.simplytestable.com/?error=404&probability=0
- http://unreliable.simplytestable.com/?error=500&probability=1
- http://unreliable.simplytestable.com/?error=503&probability=0.5

## Examples

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
