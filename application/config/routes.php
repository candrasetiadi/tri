<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "home";
$route['404_override'] = 'errors';

/*
 * Micro site
 */
$route['(?i)cerita-ambisiku'] = 'cerita';
$route['(?i)cerita-ambisiku/(:any)'] = 'cerita/index/$1';
$route['(?i)CeritaAmbisiku'] = 'cerita';
$route['(?i)CeritaAmbisiku/(:any)'] = 'cerita/index/$1';
$route['(?i)cerita'] = 'cerita';
$route['(?i)cerita/next/(:any)'] = 'cerita/next/$1';
$route['(?i)cerita/(:any)'] = 'cerita/index/$1';

$route['(?i)kelas-ambisiku'] = 'kelas';
$route['(?i)kelas-ambisiku/(:any)/(:num)'] = 'kelas/$1/$2';

$route['(?i)sebarkan-ambisiku'] = 'sebarkan';
$route['(?i)sebarkan-ambisiku/other/(:num)'] = 'sebarkan/other/$1';
$route['(?i)sebarkan-ambisiku/other/(:num)/(:num)'] = 'sebarkan/other/$1/$2';
$route['(?i)sebarkan-ambisiku/(:any)'] = 'sebarkan/index/$1';

$route['(?i)parade'] = 'parade';
$route['(?i)kejar-ambisiku'] = 'parade/kejar';
$route['(?i)talkshow'] = 'parade/talkshow';
$route['(?i)workshop'] = 'parade/workshop';
$route['(?i)bazar'] = 'parade/bazar';
$route['(?i)musik-dan-seni'] = 'parade/musik_seni';

/*
 * Dapur
 */
$route['(?i)dapur'] = 'dapur/dashboard';
$route['(?i)dapur/user'] = 'dapur/user';
$route['(?i)dapur/user/(:num)'] = 'dapur/user/getUser/$1';
$route['(?i)dapur/open-graph'] = 'dapur/website/openGraph';
$route['(?i)dapur/open-graph/save'] = 'dapur/website/SaveOpenGraph';
$route['(?i)dapur/(logout)'] = 'dapur/dashboard/$1';
$route['(?i)dapur/cerita/add'] = 'dapur/cerita/action';
$route['(?i)dapur/cerita/edit/(:num)'] = 'dapur/cerita/action/$1';
$route['(?i)dapur/cerita/delete/upload/(:num)'] = 'dapur/cerita/deleteUpload/$1';
$route['(?i)dapur/cerita/image/(:any)/(:num)'] = 'dapur/cerita/setStatus/$2/$1';