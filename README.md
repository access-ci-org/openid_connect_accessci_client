# OpenID Connect - ACCESS CI Custom Client
About

Drupal custom module that extends the OpenID Connect module (drupal/openid_connect) by adding an ACCESS CI custom client to login through CI Logon to the ACCESS Identity Profider (IdP).

ACCESS CI project: https://access-ci.org/

CI Logon: https://www.cilogon.org/

ACCESS IdP: https://identity.access-ci.org/

Module requirements:

- Drupal 9.4.x
- drupal/openid_connect 1.2.x
- Client registration at https://registry-test.access-ci.org/registry/

Features:

- Requires authenticating with the ACCESS CI IdP
- Sets the Drupal account name to the ePPN / identity sub (subject)
- Defaults to the recommended authorization, token, and userinfo endpoints
- Defaults to the recommended scopes
- Sets to destination parameter to the current page on login and logout
- Can be configured with a page the user is redirected to after login
