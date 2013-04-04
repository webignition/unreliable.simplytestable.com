unreliable.simplytestable.com
=============================

Generate chosen error-related HTTP status codes with a chosen probability of occurring, part of the test suite used by simplytestable.com

## Choosing the error to return

Use the 'error' query string parameter to specify the HTTP status code to use:

- http://unreliable.simplytestable.com/?error=404&probability=1
- http://unreliable.simplytestable.com/?error=500&probability=1
- http://unreliable.simplytestable.com/?error=503&probability=1

Use the 'probability' query string parameter to specify the probability of the chosen error being retruned:

- http://unreliable.simplytestable.com/?error=404&probability=0
- http://unreliable.simplytestable.com/?error=500&probability=1
- http://unreliable.simplytestable.com/?error=503&probability=0.5
