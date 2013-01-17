A replace function for Statamic

Usage: 
 ```javascript
  {{ string:replace string='(333) 333-4444' pattern='/[^0-9]/' replacement='' }}
 ```
Result: 
 ```javascript
  3333334444
 ```
 
 Copy pi.string.php into the _add-ons/string/ directory.
