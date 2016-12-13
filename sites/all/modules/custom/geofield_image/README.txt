
Geofield Images

Extends geofield with formatters to display location(s) as a map or streetview images via Google's Static Maps API:
http://code.google.com/apis/maps/documentation/staticmaps/


Dependancies:

geofield    A module for storing geographic data in drupal 7


Credit:

Original author:  Jeff Lyon (jlyon)


Notes on Google's Limits and Restrictions:
------------------------------------------------------

From http://code.google.com/apis/maps/documentation/staticmaps/

Use of the Google Static Maps API is subject to a query limit of 1000 unique (different) image requests per viewer per day. 
Since this restriction is a quota per viewer, most developers should not need to worry about exceeding their quota. However, 
note that we enforce an additional request rate limit to prevent abuse of the service. Requests of identical images, in 
general, do not count towards this limit beyond the original request.

This limit is enforced to prevent abuse and/or repurposing of the Static Maps API, and this limit may be changed in the 
future without notice. If you exceed the 24-hour limit or otherwise abuse the service, the Static Maps API may stop working 
for you temporarily. If you continue to exceed this limit, your access to the Static Maps API may be blocked.

Static Map URLs are restricted to 2048 characters in size. In practice, you will probably not have need for URLs longer than 
this, unless you produce complicated maps with a high number of markers and paths. Note, however, that certain characters may 
be URL-encoded by browsers and/or services before sending them off to the Static Map service, resulting in increased character 
usage. For more information, see Building a Valid URL.

------------------------------------------------------

