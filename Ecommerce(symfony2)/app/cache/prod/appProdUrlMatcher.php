<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/superAdmin/utilisateurs')) {
            // SuperAdminUtilisateurs
            if (rtrim($pathinfo, '/') === '/superAdmin/utilisateurs') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'SuperAdminUtilisateurs');
                }

                return array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\UtilisateursSuperAdminController::indexAction',  '_route' => 'SuperAdminUtilisateurs',);
            }

            // SuperAdminAdressesUtilisateurs
            if (preg_match('#^/superAdmin/utilisateurs/(?P<id>[^/]++)/adresses$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'SuperAdminAdressesUtilisateurs')), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\UtilisateursSuperAdminController::utilisateurAction',));
            }

            // SuperAdminFacturesUtilisateurs
            if (preg_match('#^/superAdmin/utilisateurs/(?P<id>[^/]++)/factures$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'SuperAdminFacturesUtilisateurs')), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\UtilisateursSuperAdminController::utilisateurAction',));
            }

        }

        // villes
        if (0 === strpos($pathinfo, '/villes') && preg_match('#^/villes/(?P<cp>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'villes')), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\UtilisateursController::villesAction',));
        }

        if (0 === strpos($pathinfo, '/profile/factures')) {
            // factures
            if ($pathinfo === '/profile/factures') {
                return array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\UtilisateursController::facturesAction',  '_route' => 'factures',);
            }

            // facturesPDF
            if (0 === strpos($pathinfo, '/profile/factures/pdf') && preg_match('#^/profile/factures/pdf/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'facturesPDF')), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\UtilisateursController::facturesPDFAction',));
            }

        }

        // aidePDF
        if ($pathinfo === '/aide') {
            return array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\UtilisateursController::aidePDFAction',  '_route' => 'aidePDF',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

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
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

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
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

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

                            return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsController::acceuilAction',  '_route' => 'fos_user_registration_confirmed',);
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

        if (0 === strpos($pathinfo, '/p')) {
            // fos_user_change_password
            if ($pathinfo === '/profile/change-password') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_change_password;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
            }
            not_fos_user_change_password:

            // commentaire
            if (0 === strpos($pathinfo, '/page') && preg_match('#^/page/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'commentaire')), array (  '_controller' => 'Pages\\PagesBundle\\Controller\\PagesController::pageAction',));
            }

        }

        if (0 === strpos($pathinfo, '/superAdmin/article')) {
            // adminArticles
            if (rtrim($pathinfo, '/') === '/superAdmin/article') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'adminArticles');
                }

                return array (  '_controller' => 'Pages\\PagesBundle\\Controller\\ArticlesAdminController::indexAction',  '_route' => 'adminArticles',);
            }

            // adminArticles_show
            if (preg_match('#^/superAdmin/article/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminArticles_show')), array (  '_controller' => 'Pages\\PagesBundle\\Controller\\ArticlesAdminController::showAction',));
            }

            // adminArticles_new
            if ($pathinfo === '/superAdmin/article/new') {
                return array (  '_controller' => 'Pages\\PagesBundle\\Controller\\ArticlesAdminController::newAction',  '_route' => 'adminArticles_new',);
            }

            // adminArticles_create
            if ($pathinfo === '/superAdmin/article/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_adminArticles_create;
                }

                return array (  '_controller' => 'Pages\\PagesBundle\\Controller\\ArticlesAdminController::createAction',  '_route' => 'adminArticles_create',);
            }
            not_adminArticles_create:

            // adminArticles_edit
            if (preg_match('#^/superAdmin/article/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminArticles_edit')), array (  '_controller' => 'Pages\\PagesBundle\\Controller\\ArticlesAdminController::editAction',));
            }

            // adminArticles_update
            if (preg_match('#^/superAdmin/article/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_adminArticles_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminArticles_update')), array (  '_controller' => 'Pages\\PagesBundle\\Controller\\ArticlesAdminController::updateAction',));
            }
            not_adminArticles_update:

            // adminArticles_delete
            if (preg_match('#^/superAdmin/article/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_adminArticles_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminArticles_delete')), array (  '_controller' => 'Pages\\PagesBundle\\Controller\\ArticlesAdminController::deleteAction',));
            }
            not_adminArticles_delete:

        }

        // article
        if (0 === strpos($pathinfo, '/page') && preg_match('#^/page/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'article')), array (  '_controller' => 'Pages\\PagesBundle\\Controller\\PagesController::pageAction',));
        }

        // blog
        if ($pathinfo === '/blog') {
            return array (  '_controller' => 'Pages\\PagesBundle\\Controller\\PagesController::menuAction',  '_route' => 'blog',);
        }

        // aboutUs
        if (rtrim($pathinfo, '/') === '/aboutUs') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'aboutUs');
            }

            return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ContactUsController::aboutUsAction',  '_route' => 'aboutUs',);
        }

        // contactUs
        if (rtrim($pathinfo, '/') === '/ContactUs') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'contactUs');
            }

            return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ContactUsController::contactUsAction',  '_route' => 'contactUs',);
        }

        if (0 === strpos($pathinfo, '/superAdmin')) {
            if (0 === strpos($pathinfo, '/superAdmin/boutiquesPremium')) {
                // adminBoutiquesPremium
                if (rtrim($pathinfo, '/') === '/superAdmin/boutiquesPremium') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'adminBoutiquesPremium');
                    }

                    return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\BoutiquesPremiumController::indexAction',  '_route' => 'adminBoutiquesPremium',);
                }

                // adminBoutiquesPremium_show
                if (preg_match('#^/superAdmin/boutiquesPremium/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminBoutiquesPremium_show')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\BoutiquesPremiumController::showAction',));
                }

                // adminBoutiquesPremium_new
                if ($pathinfo === '/superAdmin/boutiquesPremium/new') {
                    return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\BoutiquesPremiumController::newAction',  '_route' => 'adminBoutiquesPremium_new',);
                }

                // adminBoutiquesPremium_create
                if ($pathinfo === '/superAdmin/boutiquesPremium/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_adminBoutiquesPremium_create;
                    }

                    return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\BoutiquesPremiumController::createAction',  '_route' => 'adminBoutiquesPremium_create',);
                }
                not_adminBoutiquesPremium_create:

                // adminBoutiquesPremium_edit
                if (preg_match('#^/superAdmin/boutiquesPremium/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminBoutiquesPremium_edit')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\BoutiquesPremiumController::editAction',));
                }

                // adminBoutiquesPremium_update
                if (preg_match('#^/superAdmin/boutiquesPremium/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_adminBoutiquesPremium_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminBoutiquesPremium_update')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\BoutiquesPremiumController::updateAction',));
                }
                not_adminBoutiquesPremium_update:

                // adminBoutiquesPremium_delete
                if (preg_match('#^/superAdmin/boutiquesPremium/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_adminBoutiquesPremium_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminBoutiquesPremium_delete')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\BoutiquesPremiumController::deleteAction',));
                }
                not_adminBoutiquesPremium_delete:

            }

            if (0 === strpos($pathinfo, '/superAdmin/produitsPremium')) {
                // adminProduitsPremium
                if (rtrim($pathinfo, '/') === '/superAdmin/produitsPremium') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'adminProduitsPremium');
                    }

                    return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsPremiumController::indexAction',  '_route' => 'adminProduitsPremium',);
                }

                // adminProduitsPremium_show
                if (preg_match('#^/superAdmin/produitsPremium/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminProduitsPremium_show')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsPremiumController::showAction',));
                }

                // adminProduitsPremium_new
                if ($pathinfo === '/superAdmin/produitsPremium/new') {
                    return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsPremiumController::newAction',  '_route' => 'adminProduitsPremium_new',);
                }

                // adminProduitsPremium_create
                if ($pathinfo === '/superAdmin/produitsPremium/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_adminProduitsPremium_create;
                    }

                    return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsPremiumController::createAction',  '_route' => 'adminProduitsPremium_create',);
                }
                not_adminProduitsPremium_create:

                // adminProduitsPremium_edit
                if (preg_match('#^/superAdmin/produitsPremium/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminProduitsPremium_edit')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsPremiumController::editAction',));
                }

                // adminProduitsPremium_update
                if (preg_match('#^/superAdmin/produitsPremium/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_adminProduitsPremium_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminProduitsPremium_update')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsPremiumController::updateAction',));
                }
                not_adminProduitsPremium_update:

                // adminProduitsPremium_delete
                if (preg_match('#^/superAdmin/produitsPremium/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_adminProduitsPremium_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminProduitsPremium_delete')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsPremiumController::deleteAction',));
                }
                not_adminProduitsPremium_delete:

            }

            if (0 === strpos($pathinfo, '/superAdmin/sousCategories')) {
                // adminSousCategories
                if (rtrim($pathinfo, '/') === '/superAdmin/sousCategories') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'adminSousCategories');
                    }

                    return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\SousCategoriesAdminController::indexAction',  '_route' => 'adminSousCategories',);
                }

                // adminSousCategories_show
                if (preg_match('#^/superAdmin/sousCategories/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminSousCategories_show')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\SousCategoriesAdminController::showAction',));
                }

                // adminSousCategories_new
                if ($pathinfo === '/superAdmin/sousCategories/new') {
                    return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\SousCategoriesAdminController::newAction',  '_route' => 'adminSousCategories_new',);
                }

                // adminSousCategories_create
                if ($pathinfo === '/superAdmin/sousCategories/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_adminSousCategories_create;
                    }

                    return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\SousCategoriesAdminController::createAction',  '_route' => 'adminSousCategories_create',);
                }
                not_adminSousCategories_create:

                // adminSousCategories_edit
                if (preg_match('#^/superAdmin/sousCategories/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminSousCategories_edit')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\SousCategoriesAdminController::editAction',));
                }

                // adminSousCategories_update
                if (preg_match('#^/superAdmin/sousCategories/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_adminSousCategories_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminSousCategories_update')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\SousCategoriesAdminController::updateAction',));
                }
                not_adminSousCategories_update:

                // adminSousCategories_delete
                if (preg_match('#^/superAdmin/sousCategories/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_adminSousCategories_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminSousCategories_delete')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\SousCategoriesAdminController::deleteAction',));
                }
                not_adminSousCategories_delete:

            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/tva')) {
                // adminTva
                if (rtrim($pathinfo, '/') === '/admin/tva') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'adminTva');
                    }

                    return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\TvaAdminController::indexAction',  '_route' => 'adminTva',);
                }

                // adminTva_show
                if (preg_match('#^/admin/tva/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminTva_show')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\TvaAdminController::showAction',));
                }

                // adminTva_new
                if ($pathinfo === '/admin/tva/new') {
                    return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\TvaAdminController::newAction',  '_route' => 'adminTva_new',);
                }

                // adminTva_create
                if ($pathinfo === '/admin/tva/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_adminTva_create;
                    }

                    return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\TvaAdminController::createAction',  '_route' => 'adminTva_create',);
                }
                not_adminTva_create:

                // adminTva_edit
                if (preg_match('#^/admin/tva/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminTva_edit')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\TvaAdminController::editAction',));
                }

                // adminTva_update
                if (preg_match('#^/admin/tva/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_adminTva_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminTva_update')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\TvaAdminController::updateAction',));
                }
                not_adminTva_update:

                // adminTva_delete
                if (preg_match('#^/admin/tva/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_adminTva_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminTva_delete')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\TvaAdminController::deleteAction',));
                }
                not_adminTva_delete:

            }

            if (0 === strpos($pathinfo, '/admin/boutiques')) {
                // adminBoutiques
                if (rtrim($pathinfo, '/') === '/admin/boutiques') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'adminBoutiques');
                    }

                    return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\BoutiquesAdminController::indexAction',  '_route' => 'adminBoutiques',);
                }

                // adminBoutiques_show
                if (preg_match('#^/admin/boutiques/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminBoutiques_show')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\BoutiquesAdminController::showAction',));
                }

                // adminBoutiques_new
                if ($pathinfo === '/admin/boutiques/new') {
                    return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\BoutiquesAdminController::newAction',  '_route' => 'adminBoutiques_new',);
                }

                // adminBoutiques_create
                if ($pathinfo === '/admin/boutiques/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_adminBoutiques_create;
                    }

                    return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\BoutiquesAdminController::createAction',  '_route' => 'adminBoutiques_create',);
                }
                not_adminBoutiques_create:

                // adminBoutiques_edit
                if (preg_match('#^/admin/boutiques/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminBoutiques_edit')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\BoutiquesAdminController::editAction',));
                }

                // adminBoutiques_update
                if (preg_match('#^/admin/boutiques/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_adminBoutiques_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminBoutiques_update')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\BoutiquesAdminController::updateAction',));
                }
                not_adminBoutiques_update:

                // adminBoutiques_delete
                if (preg_match('#^/admin/boutiques/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_adminBoutiques_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminBoutiques_delete')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\BoutiquesAdminController::deleteAction',));
                }
                not_adminBoutiques_delete:

            }

        }

        if (0 === strpos($pathinfo, '/superAdmin/boutiques')) {
            // SuperAdminBoutiques
            if (rtrim($pathinfo, '/') === '/superAdmin/boutiques') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'SuperAdminBoutiques');
                }

                return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\BoutiquesSuperAdminController::indexAction',  '_route' => 'SuperAdminBoutiques',);
            }

            // SuperAdminBoutiques_show
            if (preg_match('#^/superAdmin/boutiques/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'SuperAdminBoutiques_show')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\BoutiquesSuperAdminController::showAction',));
            }

            // SuperAdminBoutiques_new
            if ($pathinfo === '/superAdmin/boutiques/new') {
                return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\BoutiquesSuperAdminController::newAction',  '_route' => 'SuperAdminBoutiques_new',);
            }

            // SuperAdminBoutiques_create
            if ($pathinfo === '/superAdmin/boutiques/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_SuperAdminBoutiques_create;
                }

                return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\BoutiquesSuperAdminController::createAction',  '_route' => 'SuperAdminBoutiques_create',);
            }
            not_SuperAdminBoutiques_create:

            // SuperAdminBoutiques_edit
            if (preg_match('#^/superAdmin/boutiques/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'SuperAdminBoutiques_edit')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\BoutiquesSuperAdminController::editAction',));
            }

            // SuperAdminBoutiques_update
            if (preg_match('#^/superAdmin/boutiques/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_SuperAdminBoutiques_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'SuperAdminBoutiques_update')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\BoutiquesSuperAdminController::updateAction',));
            }
            not_SuperAdminBoutiques_update:

            // SuperAdminBoutiques_delete
            if (preg_match('#^/superAdmin/boutiques/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_SuperAdminBoutiques_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'SuperAdminBoutiques_delete')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\BoutiquesSuperAdminController::deleteAction',));
            }
            not_SuperAdminBoutiques_delete:

        }

        // admin
        if (rtrim($pathinfo, '/') === '/admin') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'admin');
            }

            return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\BoutiquesAdminController::indexAction',  '_route' => 'admin',);
        }

        // SuperAdmin
        if (rtrim($pathinfo, '/') === '/superAdmin') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'SuperAdmin');
            }

            return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\BoutiquesSuperAdminController::indexAction',  '_route' => 'SuperAdmin',);
        }

        if (0 === strpos($pathinfo, '/panier')) {
            // supprimer
            if (0 === strpos($pathinfo, '/panier/supprimer') && preg_match('#^/panier/supprimer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'supprimer')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\PanierController::supprimerAction',));
            }

            if (0 === strpos($pathinfo, '/panier/ajouter')) {
                // ajouter
                if (preg_match('#^/panier/ajouter/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajouter')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\PanierController::ajouterAction',));
                }

                // ajouterPremium
                if (0 === strpos($pathinfo, '/panier/ajouterPremium') && preg_match('#^/panier/ajouterPremium/(?P<idP>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajouterPremium')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\PanierController::ajouterPremiumAction',));
                }

            }

            // panier
            if (rtrim($pathinfo, '/') === '/panier') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'panier');
                }

                return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\PanierController::panierAction',  '_route' => 'panier',);
            }

            // livraison
            if ($pathinfo === '/panier/livraison') {
                return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\PanierController::livraisonAction',  '_route' => 'livraison',);
            }

            // validation
            if ($pathinfo === '/panier/validation') {
                return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\PanierController::validationAction',  '_route' => 'validation',);
            }

            // livraisonAdresseSuppression
            if (0 === strpos($pathinfo, '/panier/livraison/adresse/suppression') && preg_match('#^/panier/livraison/adresse/suppression/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'livraisonAdresseSuppression')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\PanierController::adresseSuppressionAction',));
            }

        }

        // produits
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'produits');
            }

            return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsController::acceuilAction',  '_route' => 'produits',);
        }

        if (0 === strpos($pathinfo, '/produit')) {
            // presentation
            if (preg_match('#^/produit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'presentation')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsController::presentationAction',));
            }

            // presentationPremium
            if (0 === strpos($pathinfo, '/produitPremium') && preg_match('#^/produitPremium/(?P<idP>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'presentationPremium')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsController::presentationPremiumAction',));
            }

        }

        if (0 === strpos($pathinfo, '/sousCategorie')) {
            // sousCategorieGridProduits
            if (0 === strpos($pathinfo, '/sousCategorieGrid') && preg_match('#^/sousCategorieGrid/(?P<sousCategorieGrid>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sousCategorieGridProduits')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsController::sousCategorieGridAction',));
            }

            // sousCategorieListeProduits
            if (0 === strpos($pathinfo, '/sousCategorieListe') && preg_match('#^/sousCategorieListe/(?P<sousCategorieListe>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sousCategorieListeProduits')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsController::sousCategorieListeAction',));
            }

        }

        // boutiqueProduits
        if (0 === strpos($pathinfo, '/boutique/m') && preg_match('#^/boutique/m/(?P<boutique>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'boutiqueProduits')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\BoutiquesController::produitAction',));
        }

        if (0 === strpos($pathinfo, '/categorie')) {
            // categorieGridBoutiques
            if (0 === strpos($pathinfo, '/categorieGrid') && preg_match('#^/categorieGrid/(?P<categorieGrid>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorieGridBoutiques')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\BoutiquesController::categorieGridAction',));
            }

            // categorieListeBoutiques
            if (0 === strpos($pathinfo, '/categorieListe') && preg_match('#^/categorieListe/(?P<categorieListe>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorieListeBoutiques')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\BoutiquesController::categorieListeAction',));
            }

        }

        if (0 === strpos($pathinfo, '/boutique')) {
            // presentationBoutique
            if (preg_match('#^/boutique/(?P<idB>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'presentationBoutique')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\BoutiquesController::presentationBoutiqueAction',));
            }

            // presentationBoutiquePremium
            if (0 === strpos($pathinfo, '/boutiquePremium') && preg_match('#^/boutiquePremium/(?P<idBP>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'presentationBoutiquePremium')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\BoutiquesController::presentationBoutiquePremiumAction',));
            }

        }

        // boutiques
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'boutiques');
            }

            return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\BoutiquesController::boutiquesAction',  '_route' => 'boutiques',);
        }

        // categorieProduits
        if (0 === strpos($pathinfo, '/categorie') && preg_match('#^/categorie/(?P<categorie>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorieProduits')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\BoutiquesController::boutiquesAction',));
        }

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

        if (0 === strpos($pathinfo, '/superAdmin/produits')) {
            // SuperAdminProduits
            if (rtrim($pathinfo, '/') === '/superAdmin/produits') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'SuperAdminProduits');
                }

                return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsSuperAdminController::indexAction',  '_route' => 'SuperAdminProduits',);
            }

            // SuperAdminProduits_show
            if (preg_match('#^/superAdmin/produits/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'SuperAdminProduits_show')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsSuperAdminController::showAction',));
            }

            // SuperAdminProduits_new
            if ($pathinfo === '/superAdmin/produits/new') {
                return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsSuperAdminController::newAction',  '_route' => 'SuperAdminProduits_new',);
            }

            // SuperAdminProduits_create
            if ($pathinfo === '/superAdmin/produits/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_SuperAdminProduits_create;
                }

                return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsSuperAdminController::createAction',  '_route' => 'SuperAdminProduits_create',);
            }
            not_SuperAdminProduits_create:

            // SuperAdminProduits_edit
            if (preg_match('#^/superAdmin/produits/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'SuperAdminProduits_edit')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsSuperAdminController::editAction',));
            }

            // SuperAdminProduits_update
            if (preg_match('#^/superAdmin/produits/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_SuperAdminProduits_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'SuperAdminProduits_update')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsSuperAdminController::updateAction',));
            }
            not_SuperAdminProduits_update:

            // SuperAdminProduits_delete
            if (preg_match('#^/superAdmin/produits/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_SuperAdminProduits_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'SuperAdminProduits_delete')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsSuperAdminController::deleteAction',));
            }
            not_SuperAdminProduits_delete:

        }

        if (0 === strpos($pathinfo, '/admin/categories')) {
            // adminCategories
            if (rtrim($pathinfo, '/') === '/admin/categories') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'adminCategories');
                }

                return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CategoriesAdminController::indexAction',  '_route' => 'adminCategories',);
            }

            // adminCategories_show
            if (preg_match('#^/admin/categories/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminCategories_show')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CategoriesAdminController::showAction',));
            }

            // adminCategories_new
            if ($pathinfo === '/admin/categories/new') {
                return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CategoriesAdminController::newAction',  '_route' => 'adminCategories_new',);
            }

            // adminCategories_create
            if ($pathinfo === '/admin/categories/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_adminCategories_create;
                }

                return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CategoriesAdminController::createAction',  '_route' => 'adminCategories_create',);
            }
            not_adminCategories_create:

            // adminCategories_edit
            if (preg_match('#^/admin/categories/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminCategories_edit')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CategoriesAdminController::editAction',));
            }

            // adminCategories_update
            if (preg_match('#^/admin/categories/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_adminCategories_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminCategories_update')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CategoriesAdminController::updateAction',));
            }
            not_adminCategories_update:

            // adminCategories_delete
            if (preg_match('#^/admin/categories/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_adminCategories_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminCategories_delete')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CategoriesAdminController::deleteAction',));
            }
            not_adminCategories_delete:

        }

        if (0 === strpos($pathinfo, '/superAdmin/categories')) {
            // SuperAdminCategories
            if (rtrim($pathinfo, '/') === '/superAdmin/categories') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'SuperAdminCategories');
                }

                return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CategoriesSuperAdminController::indexAction',  '_route' => 'SuperAdminCategories',);
            }

            // SuperAdminCategories_show
            if (preg_match('#^/superAdmin/categories/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'SuperAdminCategories_show')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CategoriesSuperAdminController::showAction',));
            }

            // SuperAdminCategories_new
            if ($pathinfo === '/superAdmin/categories/new') {
                return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CategoriesSuperAdminController::newAction',  '_route' => 'SuperAdminCategories_new',);
            }

            // SuperAdminCategories_create
            if ($pathinfo === '/superAdmin/categories/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_SuperAdminCategories_create;
                }

                return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CategoriesSuperAdminController::createAction',  '_route' => 'SuperAdminCategories_create',);
            }
            not_SuperAdminCategories_create:

            // SuperAdminCategories_edit
            if (preg_match('#^/superAdmin/categories/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'SuperAdminCategories_edit')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CategoriesSuperAdminController::editAction',));
            }

            // SuperAdminCategories_update
            if (preg_match('#^/superAdmin/categories/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_SuperAdminCategories_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'SuperAdminCategories_update')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CategoriesSuperAdminController::updateAction',));
            }
            not_SuperAdminCategories_update:

            // SuperAdminCategories_delete
            if (preg_match('#^/superAdmin/categories/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_SuperAdminCategories_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'SuperAdminCategories_delete')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CategoriesSuperAdminController::deleteAction',));
            }
            not_SuperAdminCategories_delete:

        }

        if (0 === strpos($pathinfo, '/admin/commandes')) {
            // adminCommande
            if (rtrim($pathinfo, '/') === '/admin/commandes') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'adminCommande');
                }

                return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CommandesAdminController::commandesAction',  '_route' => 'adminCommande',);
            }

            // adminShowFacture
            if (0 === strpos($pathinfo, '/admin/commandes/facture') && preg_match('#^/admin/commandes/facture/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminShowFacture')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CommandesAdminController::showFactureAction',));
            }

        }

        if (0 === strpos($pathinfo, '/superAdmin')) {
            // superAdminCommande
            if (rtrim($pathinfo, '/') === '/superAdmin/commandes') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'superAdminCommande');
                }

                return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CommandesAdminController::commandesAdminAction',  '_route' => 'superAdminCommande',);
            }

            // superAdminMessage
            if (rtrim($pathinfo, '/') === '/superAdmin/messages') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'superAdminMessage');
                }

                return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ContactUsController::messagesAction',  '_route' => 'superAdminMessage',);
            }

        }

        // validationCommande
        if (0 === strpos($pathinfo, '/api/banque') && preg_match('#^/api/banque/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'validationCommande')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CommandesController::validationCommandeAction',));
        }

        // rechercheProduits
        if ($pathinfo === '/recherche') {
            return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsController::rechercheTraitementAction',  '_route' => 'rechercheProduits',);
        }

        if (0 === strpos($pathinfo, '/media/cache/resolve')) {
            // liip_imagine_filter_runtime
            if (preg_match('#^/media/cache/resolve/(?P<filter>[A-z0-9_\\-]*)/rc/(?P<hash>[^/]++)/(?P<path>.+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_liip_imagine_filter_runtime;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'liip_imagine_filter_runtime')), array (  '_controller' => 'liip_imagine.controller:filterRuntimeAction',));
            }
            not_liip_imagine_filter_runtime:

            // liip_imagine_filter
            if (preg_match('#^/media/cache/resolve/(?P<filter>[A-z0-9_\\-]*)/(?P<path>.+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_liip_imagine_filter;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'liip_imagine_filter')), array (  '_controller' => 'liip_imagine.controller:filterAction',));
            }
            not_liip_imagine_filter:

        }

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
