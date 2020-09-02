<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/consultant' => [[['_route' => 'consultant_index', '_controller' => 'App\\Controller\\ConsultantController::index'], null, ['GET' => 0], null, true, false, null]],
        '/consultant/add' => [[['_route' => 'consultant_add', '_controller' => 'App\\Controller\\ConsultantController::createConsultant'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/department' => [[['_route' => 'department_index', '_controller' => 'App\\Controller\\DepartmentController::index'], null, ['GET' => 0], null, true, false, null]],
        '/department/add' => [[['_route' => 'department_add', '_controller' => 'App\\Controller\\DepartmentController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/discharge' => [[['_route' => 'discharge', '_controller' => 'App\\Controller\\DischargeController::index'], null, null, null, false, false, null]],
        '/doctor' => [[['_route' => 'doctor_index', '_controller' => 'App\\Controller\\DoctorController::index'], null, ['GET' => 0], null, true, false, null]],
        '/doctor/add' => [[['_route' => 'doctor_add', '_controller' => 'App\\Controller\\DoctorController::createDoctor'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/forget' => [[['_route' => 'forget', '_controller' => 'App\\Controller\\ForgetController::forget'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/hospital' => [[['_route' => 'hospital_index', '_controller' => 'App\\Controller\\HospitalController::index'], null, ['GET' => 0], null, true, false, null]],
        '/hospital/add' => [[['_route' => 'hospital_add', '_controller' => 'App\\Controller\\HospitalController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/icu/add' => [[['_route' => 'icureport_add', '_controller' => 'App\\Controller\\ICUController::createICUReport'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/nurse' => [[['_route' => 'nurse_index', '_controller' => 'App\\Controller\\NurseController::index'], null, ['GET' => 0], null, true, false, null]],
        '/nurse/add' => [[['_route' => 'nurse_add', '_controller' => 'App\\Controller\\NurseController::createNurse'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/patient' => [[['_route' => 'patients_list', '_controller' => 'App\\Controller\\PatientController::displayPatient'], null, null, null, false, false, null]],
        '/icu' => [[['_route' => 'icu_reports_list', '_controller' => 'App\\Controller\\PatientController::displayICU'], null, null, null, false, false, null]],
        '/clinic' => [[['_route' => 'clinics_list', '_controller' => 'App\\Controller\\PatientController::displayClinic'], null, null, null, false, false, null]],
        '/patient/add' => [[['_route' => 'patient_add', '_controller' => 'App\\Controller\\PatientController::createPatient'], null, null, null, false, false, null]],
        '/surgery/patient/add' => [[['_route' => 'patient_surgery_add', '_controller' => 'App\\Controller\\PatientController::createSurgeryPatient'], null, null, null, false, false, null]],
        '/icu/patient/add' => [[['_route' => 'patient_icu_add', '_controller' => 'App\\Controller\\PatientController::createICUPatient'], null, null, null, false, false, null]],
        '/clinic/patient/add' => [[['_route' => 'patient_clinic_add', '_controller' => 'App\\Controller\\PatientController::createClinicPatient'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'registration', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [
            [['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null],
            [['_route' => 'hwi_oauth_connect', '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\LoginController::connectAction'], null, null, null, true, false, null],
        ],
        '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/surgery' => [[['_route' => 'surgeries_list', '_controller' => 'App\\Controller\\SurgeryController::display'], null, null, null, false, false, null]],
        '/surgery/add' => [[['_route' => 'surgery_add', '_controller' => 'App\\Controller\\SurgeryController::createSurgery'], null, null, null, false, false, null]],
        '/technician' => [[['_route' => 'technician_index', '_controller' => 'App\\Controller\\TechnicianController::index'], null, ['GET' => 0], null, true, false, null]],
        '/technician/add' => [[['_route' => 'technician_add', '_controller' => 'App\\Controller\\TechnicianController::createTechnician'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/unit' => [[['_route' => 'unit_index', '_controller' => 'App\\Controller\\UnitController::index'], null, ['GET' => 0], null, true, false, null]],
        '/unit/add' => [[['_route' => 'unit_add', '_controller' => 'App\\Controller\\UnitController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/ward' => [[['_route' => 'ward_index', '_controller' => 'App\\Controller\\WardController::index'], null, ['GET' => 0], null, true, false, null]],
        '/ward/add' => [[['_route' => 'ward_add', '_controller' => 'App\\Controller\\WardController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/get-units-from-department' => [[['_route' => 'technician_list_units', '_controller' => 'App:Technician:listUnitsOfDepartment'], null, ['GET' => 0], null, false, false, null]],
        '/login/check-facebook' => [[['_route' => 'facebook_login'], null, null, null, false, false, null]],
        '/login/check-github' => [[['_route' => 'github_login'], null, null, null, false, false, null]],
        '/captcha-handler' => [[['_route' => 'captcha_handler', '_controller' => 'Captcha\\Bundle\\CaptchaBundle\\Controller\\CaptchaHandlerController::indexAction'], null, ['GET' => 0], null, false, false, null]],
        '/simple-captcha-handler' => [[['_route' => 'simple_captcha_handler', '_controller' => 'Captcha\\Bundle\\CaptchaBundle\\Controller\\SimpleCaptchaHandlerController::indexAction'], null, ['GET' => 0], null, false, false, null]],
        '/search' => [[['_route' => 'ajax_search', '_controller' => 'App\\Controller\\ConsultantController::search'], null, null, null, false, false, null]],
        '/patient_search' => [[['_route' => 'patient_search', '_controller' => 'App\\Controller\\PatientController::searchPatient'], null, null, null, false, false, null]],
        '/doctor_search' => [[['_route' => 'doctor_search', '_controller' => 'App\\Controller\\DoctorController::searchDoctor'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/c(?'
                    .'|on(?'
                        .'|sultant/(?'
                            .'|([^/]++)(?'
                                .'|(*:201)'
                                .'|/edit(*:214)'
                                .'|(*:222)'
                            .')'
                            .'|department(*:241)'
                            .'|unit(*:253)'
                            .'|ward(*:265)'
                        .')'
                        .'|nect/(?'
                            .'|([^/]++)(*:290)'
                            .'|service/([^/]++)(*:314)'
                            .'|registration/([^/]++)(*:343)'
                        .')'
                    .')'
                    .'|linic/patient/edit/([^/]++)(*:380)'
                .')'
                .'|/d(?'
                    .'|epartment/([^/]++)(?'
                        .'|(*:415)'
                        .'|/edit(*:428)'
                        .'|(*:436)'
                    .')'
                    .'|octor/(?'
                        .'|([^/]++)(?'
                            .'|(*:465)'
                            .'|/edit(*:478)'
                            .'|(*:486)'
                        .')'
                        .'|department(*:505)'
                        .'|unit(*:517)'
                        .'|ward(*:529)'
                    .')'
                .')'
                .'|/hospital/([^/]++)(?'
                    .'|(*:560)'
                    .'|/edit(*:573)'
                    .'|(*:581)'
                .')'
                .'|/icu/(?'
                    .'|([^/]++)(?'
                        .'|(*:609)'
                        .'|/edit(*:622)'
                        .'|(*:630)'
                    .')'
                    .'|patient/edit/([^/]++)(*:660)'
                .')'
                .'|/nurse/(?'
                    .'|([^/]++)(?'
                        .'|(*:690)'
                        .'|/edit(*:703)'
                        .'|(*:711)'
                    .')'
                    .'|department(*:730)'
                    .'|unit(*:742)'
                    .'|ward(*:754)'
                .')'
                .'|/p(?'
                    .'|atient/(?'
                        .'|edit/([^/]++)(*:791)'
                        .'|([^/]++)(?'
                            .'|(*:810)'
                        .')'
                    .')'
                    .'|df/([^/]++)(*:831)'
                .')'
                .'|/surgery/(?'
                    .'|patient/edit/([^/]++)(*:873)'
                    .'|edit/([^/]++)(*:894)'
                .')'
                .'|/technician/(?'
                    .'|([^/]++)(?'
                        .'|(*:929)'
                        .'|/edit(*:942)'
                        .'|(*:950)'
                    .')'
                    .'|department(*:969)'
                    .'|unit(*:981)'
                    .'|ward(*:993)'
                .')'
                .'|/unit/(?'
                    .'|([^/]++)(?'
                        .'|(*:1022)'
                        .'|/edit(*:1036)'
                        .'|(*:1045)'
                    .')'
                    .'|department(*:1065)'
                .')'
                .'|/ward/(?'
                    .'|([^/]++)(?'
                        .'|(*:1095)'
                        .'|/edit(*:1109)'
                        .'|(*:1118)'
                    .')'
                    .'|department(*:1138)'
                    .'|unit(*:1151)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        201 => [[['_route' => 'consultant_show', '_controller' => 'App\\Controller\\ConsultantController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        214 => [[['_route' => 'consultant_edit', '_controller' => 'App\\Controller\\ConsultantController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        222 => [[['_route' => 'consultant_delete', '_controller' => 'App\\Controller\\ConsultantController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        241 => [[['_route' => 'consultant_getDepartment', '_controller' => 'App\\Controller\\ConsultantController::getDepartment'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        253 => [[['_route' => 'consultant_getUnit', '_controller' => 'App\\Controller\\ConsultantController::getUnit'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        265 => [[['_route' => 'consultant_getWard', '_controller' => 'App\\Controller\\ConsultantController::getWard'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        290 => [[['_route' => 'hwi_oauth_service_redirect', '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\RedirectToServiceController::redirectToServiceAction'], ['service'], null, null, false, true, null]],
        314 => [[['_route' => 'hwi_oauth_connect_service', '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::connectServiceAction'], ['service'], null, null, false, true, null]],
        343 => [[['_route' => 'hwi_oauth_connect_registration', '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::registrationAction'], ['key'], null, null, false, true, null]],
        380 => [[['_route' => 'clinic_patient_edit', '_controller' => 'App\\Controller\\PatientController::editClinicPatient'], ['id'], null, null, false, true, null]],
        415 => [[['_route' => 'department_show', '_controller' => 'App\\Controller\\DepartmentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        428 => [[['_route' => 'department_edit', '_controller' => 'App\\Controller\\DepartmentController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        436 => [[['_route' => 'department_delete', '_controller' => 'App\\Controller\\DepartmentController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        465 => [[['_route' => 'doctor_show', '_controller' => 'App\\Controller\\DoctorController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        478 => [[['_route' => 'doctor_edit', '_controller' => 'App\\Controller\\DoctorController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        486 => [[['_route' => 'doctor_delete', '_controller' => 'App\\Controller\\DoctorController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        505 => [[['_route' => 'doctor_getDepartment', '_controller' => 'App\\Controller\\DoctorController::getDepartment'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        517 => [[['_route' => 'doctor_getUnit', '_controller' => 'App\\Controller\\DoctorController::getUnit'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        529 => [[['_route' => 'doctor_getWard', '_controller' => 'App\\Controller\\DoctorController::getWard'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        560 => [[['_route' => 'hospital_show', '_controller' => 'App\\Controller\\HospitalController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        573 => [[['_route' => 'hospital_edit', '_controller' => 'App\\Controller\\HospitalController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        581 => [[['_route' => 'hospital_delete', '_controller' => 'App\\Controller\\HospitalController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        609 => [[['_route' => 'icureport_show', '_controller' => 'App\\Controller\\ICUController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        622 => [[['_route' => 'icureport_edit', '_controller' => 'App\\Controller\\ICUController::editICUReport'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        630 => [[['_route' => 'icureport_delete', '_controller' => 'App\\Controller\\ICUController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        660 => [[['_route' => 'icu_patient_edit', '_controller' => 'App\\Controller\\PatientController::editICUPatient'], ['id'], null, null, false, true, null]],
        690 => [[['_route' => 'nurse_show', '_controller' => 'App\\Controller\\NurseController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        703 => [[['_route' => 'nurse_edit', '_controller' => 'App\\Controller\\NurseController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        711 => [[['_route' => 'nurse_delete', '_controller' => 'App\\Controller\\NurseController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        730 => [[['_route' => 'nurse_getDepartment', '_controller' => 'App\\Controller\\NurseController::getDepartment'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        742 => [[['_route' => 'nurse_getUnit', '_controller' => 'App\\Controller\\NurseController::getUnit'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        754 => [[['_route' => 'nurse_getWard', '_controller' => 'App\\Controller\\NurseController::getWard'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        791 => [[['_route' => 'patient_edit', '_controller' => 'App\\Controller\\PatientController::editPatient'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        810 => [
            [['_route' => 'patient_show', '_controller' => 'App\\Controller\\PatientController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'patient_delete', '_controller' => 'App\\Controller\\PatientController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        831 => [[['_route' => 'pdf_print', '_controller' => 'App\\Controller\\PdfController::generate_pdf'], ['id'], null, null, false, true, null]],
        873 => [[['_route' => 'surgery_patient_edit', '_controller' => 'App\\Controller\\PatientController::editSurgeryPatient'], ['id'], null, null, false, true, null]],
        894 => [[['_route' => 'surgery_edit', '_controller' => 'App\\Controller\\SurgeryController::edit'], ['id'], null, null, false, true, null]],
        929 => [[['_route' => 'technician_show', '_controller' => 'App\\Controller\\TechnicianController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        942 => [[['_route' => 'technician_edit', '_controller' => 'App\\Controller\\TechnicianController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        950 => [[['_route' => 'technician_delete', '_controller' => 'App\\Controller\\TechnicianController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        969 => [[['_route' => 'technician_getDepartment', '_controller' => 'App\\Controller\\TechnicianController::getDepartment'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        981 => [[['_route' => 'technician_getUnit', '_controller' => 'App\\Controller\\TechnicianController::getUnit'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        993 => [[['_route' => 'technician_getWard', '_controller' => 'App\\Controller\\TechnicianController::getWard'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1022 => [[['_route' => 'unit_show', '_controller' => 'App\\Controller\\UnitController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1036 => [[['_route' => 'unit_edit', '_controller' => 'App\\Controller\\UnitController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1045 => [[['_route' => 'unit_delete', '_controller' => 'App\\Controller\\UnitController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1065 => [[['_route' => 'unit_getDepartment', '_controller' => 'App\\Controller\\UnitController::getDepartment'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1095 => [[['_route' => 'ward_show', '_controller' => 'App\\Controller\\WardController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1109 => [[['_route' => 'ward_edit', '_controller' => 'App\\Controller\\WardController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1118 => [[['_route' => 'ward_delete', '_controller' => 'App\\Controller\\WardController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1138 => [[['_route' => 'ward_getDepartment', '_controller' => 'App\\Controller\\WardController::getDepartment'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1151 => [
            [['_route' => 'ward_getUnit', '_controller' => 'App\\Controller\\WardController::getUnit'], [], ['GET' => 0, 'POST' => 1], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
