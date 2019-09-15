# Connect PHP-Firebase

Connetion your firebase with php 
 **About:**
 [Firebase docs](https://firebase-php.readthedocs.io/) 
thx by [arthimann/firebase-php](https://github.com/arthimann/firebase-php/) 

# Steps: 
**1. Create db:**
- Add project in firebase
- Create database (test mode)
- Turn off Real time database

**2. Install Composer:**
- In your PHP proyect
-` $ composer init`   (minimun stability: dev, dependcis: no  )
- ` $ composer install`
- In your yourPage.php: requiere autoload.php

**3. Permissions:**
- Console.Firebase > Project settings> Manage their permissions
- On Manage their permissions > Service Accounts > Create Key (Json)
- Follow [PHPFirebase docs](https://firebase-php.readthedocs.io/) 



