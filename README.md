# Project 4
+ By: *Edidiong Amos*
+ Production URL: <http://p4.diddydear.com>

## Database
Primary tables:
  + `Exchanges`
  + `Currencies`
  
Pivot table(s):
  + `Locals`

## CRUD
__Create__
  + Visit <http://p4.diddydear.com/exchange>
  + Fill out form
  + Click *Continue*
  + Observe confirmation message
  
__Read__
  + Visit <http://p4.diddydear.com/exchange> to see a listing of all currency exchange on the far right.
  
__Update__
  + User is redirected to <http://p4.diddydear.com/exchange/details>; after insertion, choose the Edit button.
  + Make some edit to the form
  + Click *Save changes*
  + Observe confirmation message
  
__Delete__
  + User is redirected to <http://p4.diddydear.com/exchange/details>; after insertion, choose the Delete button beside the Edit button.
  + Confirm *deletion*
  + Observe confirmation message

## External Resources
+ CSS Theming [Bootstrap 4](https://getbootstrap.com/) used to style page layouts and forms.
+ Multiplication with Javascript <https://www.sitepoint.com/community/t/multiplying-values-with-javascript/2580/10> used to multiply values with Javascript.
+ Dropdown Values Display (http://jsfiddle.net/xKL44/2/) used to select values from the dropdown menu. 
+ Ramdom Strings Generator (https://laravel.com/docs/5.6/helpers#method-str-random) used for generating transaction ID.
+ Dropdown list in a form:(https://www.w3schools.com/jsref/prop_text_value.asp) gets the value of dropdown in realtime. 
+ Country Flag Icon (http://365icon.com/icon-styles/ethnic/classic2/) displays flags for various currencies. 

## Notes for instructor
+ Create Operation - Sets Currency Rates on the Exchange page.
+ Create Operation happens when the form on the exchange page is filled and submitted.
+ Update Operation - After form insertion on exchange page, user is redirected to .../exchange/details. This contains the update and delete operations.
+ The .../exchange/details expects a parameter to be parsed. 