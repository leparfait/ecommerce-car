<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/admin/utilisateurs')) {
            // adminUtilisateurs
            if (rtrim($pathinfo, '/') === '/admin/utilisateurs') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'adminUtilisateurs');
                }

                return array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\UtilisateursAdminController::indexAction',  '_route' => 'adminUtilisateurs',);
            }

            // adminAdressesUtilisateurs
            if (preg_match('#^/admin/utilisateurs/(?P<id>[^/]++)/adresses$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminAdressesUtilisateurs')), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\UtilisateursAdminController::utilisateurAction',));
            }

            // adminFacturesUtilisateurs
            if (preg_match('#^/admin/utilisateurs/(?P<id>[^/]++)/factures$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminFacturesUtilisateurs')), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\UtilisateursAdminController::utilisateurAction',));
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_change_password
            if ($pathinfo === '/profile/change-password') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_change_password;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
            }
            not_fos_user_change_password:

            if (0 === strpos($pathinfo, '/profile/facture')) {
                // factures
                if ($pathinfo === '/profile/facture') {
                    return array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\UtilisateursController::facturesAction',  '_route' => 'factures',);
                }

                // facturesPDF
                if (0 === strpos($pathinfo, '/profile/facture/pdf') && preg_match('#^/profile/facture/pdf/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'facturesPDF')), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\UtilisateursController::facturesPDFAction',));
                }

            }

        }

        // villes
        if (0 === strpos($pathinfo, '/villes') && preg_match('#^/villes/(?P<cp>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'villes')), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\UtilisateursController::villesAction',));
        }

        if (0 === strpos($pathinfo, '/admin/pages')) {
            // adminPages
            if (rtrim($pathinfo, '/') === '/admin/pages') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'adminPages');
                }

                return array (  '_controller' => 'Pages\\PagesBundle\\Controller\\pagesAdminController::indexAction',  '_route' => 'adminPages',);
            }

            // adminPages_show
            if (preg_match('#^/admin/pages/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminPages_show')), array (  '_controller' => 'Pages\\PagesBundle\\Controller\\pagesAdminController::showAction',));
            }

            // adminPages_new
            if ($pathinfo === '/admin/pages/new') {
                return array (  '_controller' => 'Pages\\PagesBundle\\Controller\\pagesAdminController::newAction',  '_route' => 'adminPages_new',);
            }

            // adminPages_create
            if ($pathinfo === '/admin/pages/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_adminPages_create;
                }

                return array (  '_controller' => 'Pages\\PagesBundle\\Controller\\pagesAdminController::createAction',  '_route' => 'adminPages_create',);
            }
            not_adminPages_create:

            // adminPages_edit
            if (preg_match('#^/admin/pages/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminPages_edit')), array (  '_controller' => 'Pages\\PagesBundle\\Controller\\pagesAdminController::editAction',));
            }

            // adminPages_update
            if (preg_match('#^/admin/pages/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_adminPages_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminPages_update')), array (  '_controller' => 'Pages\\PagesBundle\\Controller\\pagesAdminController::updateAction',));
            }
            not_adminPages_update:

            // adminPages_delete
            if (preg_match('#^/admin/pages/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_adminPages_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminPages_delete')), array (  '_controller' => 'Pages\\PagesBundle\\Controller\\pagesAdminController::deleteAction',));
            }
            not_adminPages_delete:

        }

        // pages
        if (0 === strpos($pathinfo, '/page') && preg_match('#^/page/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pages')), array (  '_controller' => 'Pages\\PagesBundle\\Controller\\PageController::pageAction',));
        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/produits')) {
                // adminProduits
                if (rtrim($pathinfo, '/') === '/admin/produits') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'adminProduits');
                    }

                    return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsAdminController::indexAction',  '_route' => 'adminProduits',);
                }

                // adminProduits_show
                if (preg_match('#^/admin/produits/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminProduits_show')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsAdminController::showAction',));
                }

                // adminProduits_new
                if ($pathinfo === '/admin/produits/new') {
                    return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsAdminController::newAction',  '_route' => 'adminProduits_new',);
                }

                // adminProduits_create
                if ($pathinfo === '/admin/produits/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_adminProduits_create;
                    }

                    return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsAdminController::createAction',  '_route' => 'adminProduits_create',);
                }
                not_adminProduits_create:

                // adminProduits_edit
                if (preg_match('#^/admin/produits/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminProduits_edit')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsAdminController::editAction',));
                }

                // adminProduits_update
                if (preg_match('#^/admin/produits/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_adminProduits_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminProduits_update')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsAdminController::updateAction',));
                }
                not_adminProduits_update:

                // adminProduits_delete
                if (preg_match('#^/admin/produits/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_adminProduits_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminProduits_delete')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsAdminController::deleteAction',));
                }
                not_adminProduits_delete:

            }

            if (0 === strpos($pathinfo, '/admin/c')) {
                if (0 === strpos($pathinfo, '/admin/categories')) {
                    // adminCategories
                    if (rtrim($pathinfo, '/') === '/admin/categories') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'adminCategories');
                        }

                        return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\categoriesAdminController::indexAction',  '_route' => 'adminCategories',);
                    }

                    // adminCategories_show
                    if (preg_match('#^/admin/categories/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminCategories_show')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\categoriesAdminController::showAction',));
                    }

                    // adminCategories_new
                    if ($pathinfo === '/admin/categories/new') {
                        return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\categoriesAdminController::newAction',  '_route' => 'adminCategories_new',);
                    }

                    // adminCategories_create
                    if ($pathinfo === '/admin/categories/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_adminCategories_create;
                        }

                        return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\categoriesAdminController::createAction',  '_route' => 'adminCategories_create',);
                    }
                    not_adminCategories_create:

                    // adminCategories_edit
                    if (preg_match('#^/admin/categories/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminCategories_edit')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\categoriesAdminController::editAction',));
                    }

                    // adminCategories_update
                    if (preg_match('#^/admin/categories/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_adminCategories_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminCategories_update')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\categoriesAdminController::updateAction',));
                    }
                    not_adminCategories_update:

                    // adminCategories_delete
                    if (preg_match('#^/admin/categories/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_adminCategories_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminCategories_delete')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\categoriesAdminController::deleteAction',));
                    }
                    not_adminCategories_delete:

                }

                if (0 === strpos($pathinfo, '/admin/commandes')) {
                    // adminCommandes
                    if (rtrim($pathinfo, '/') === '/admin/commandes') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'adminCommandes');
                        }

                        return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\commandesAdminController::indexAction',  '_route' => 'adminCommandes',);
                    }

                    // adminCommandes_show
                    if (rtrim($pathinfo, '/') === '/admin/commandes') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'adminCommandes_show');
                        }

                        return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\commandesAdminController::showFactureAction',  '_route' => 'adminCommandes_show',);
                    }

                }

            }

        }

        // produits
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'produits');
            }

            return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\produitsController::produitsAction',  '_route' => 'produits',);
        }

        if (0 === strpos($pathinfo, '/p')) {
            // presentation
            if (0 === strpos($pathinfo, '/produit') && preg_match('#^/produit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'presentation')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\produitsController::presentationAction',));
            }

            if (0 === strpos($pathinfo, '/panier')) {
                // panier
                if ($pathinfo === '/panier') {
                    return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\panierController::panierAction',  '_route' => 'panier',);
                }

                // livraison
                if ($pathinfo === '/panier/livraison') {
                    return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\panierController::livraisonAction',  '_route' => 'livraison',);
                }

                // validation
                if ($pathinfo === '/panier/validation') {
                    return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\panierController::validationAction',  '_route' => 'validation',);
                }

            }

        }

        // test
        if ($pathinfo === '/test') {
            return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\TestController::ajoutAction',  '_route' => 'test',);
        }

        // categoriesProduits
        if (0 === strpos($pathinfo, '/categorie') && preg_match('#^/categorie/(?P<categorie>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'categoriesProduits')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\produitsController::categorieAction',));
        }

        // rechercheProduits
        if (rtrim($pathinfo, '/') === '/produit') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'rechercheProduits');
            }

            return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\produitsController::rechercheTraitementAction',  '_route' => 'rechercheProduits',);
        }

        // supprimer
        if (0 === strpos($pathinfo, '/supprimer') && preg_match('#^/supprimer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'supprimer')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\panierController::supprimerAction',));
        }

        // ajouter
        if (0 === strpos($pathinfo, '/ajouter') && preg_match('#^/ajouter/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajouter')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\panierController::ajouterAction',));
        }

        // livraisonAdresseSuppression
        if (0 === strpos($pathinfo, '/livaison/adresse/suppression') && preg_match('#^/livaison/adresse/suppression/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'livraisonAdresseSuppression')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\panierController::adresseSuppressionAction',));
        }

        if (0 === strpos($pathinfo, '/a')) {
            // facturationAdresseSuppression
            if (0 === strpos($pathinfo, '/adresse') && preg_match('#^/adresse/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'facturationAdresseSuppression')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\panierController::livraisonAdresseSuppressionAction',));
            }

            // validationCommande
            if (0 === strpos($pathinfo, '/api/banque') && preg_match('#^/api/banque/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'validationCommande')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\commandesController::validationCommandeAction',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
