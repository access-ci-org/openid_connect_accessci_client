# OpenID Connect - ACCESS CI Custom Client

## Introduction

Drupal custom module that extends the OpenID Connect module (drupal/openid_connect) by adding an ACCESS CI custom client to login through CI Logon to the ACCESS Identity Profider (IdP).

ACCESS CI project: https://access-ci.org/

CI Logon: https://www.cilogon.org/

ACCESS IdP: https://identity.access-ci.org/

## Features

+ Implements an "ACCESS CI" OpenID Connect custom client 
+ Configurable settings:
  - Client ID
  - Client secret
  - Authorizaton endpoint
    * Default to recommended: https://cilogon.org/authorize?idphint=https%3A%2F%2Faccess-ci.org%2Fidp
  - Token endpoint
    * Default to recommended: https://cilogon.org/oauth2/token
  - Userinfo endpoint
    * Default to recommended: https://cilogon.org/oauth2/userinfo
  - Requested scopes
    * Default to recommended: email,openid,profile,org.cilogon.userinfo
  - Login redirect path
+ Can be configured with a page the user is redirected to after login
+ Login with any CILogon identity as long as there is an ACCESS CI linked identity
+ Sets the Drupal account name to the ePPN / identity sub (subject)
+ Redirects the client to the current local page after they login or logout

## Module requirements:

+ Drupal 9.4.x, 9.5.x
+ drupal/openid_connect 1.2.x
+ Client registration at https://registry.access-ci.org/
