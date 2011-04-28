<?php

// LDAP server(s) to query for more information on CodeX users and 
// for authentication.
// You may use a comma-separated list if there are several servers available
// (leave blank to disable LDAP lookup). 
// To specify secure LDAP servers, use 'ldaps://servername' 
$sys_ldap_server = '%sys_ldap_server%';

// To enable LDAP information on CodeX users, also define the DN 
// (distinguised name) to use in LDAP queries.
// The ldap filter is the filter to use to query the LDAP directory
// (%name% are substituted with the value from the user table)
$sys_ldap_dn     = 'o=XEROX, c=US';

// For LDAP systems that do not accept anonymous binding, define here
// a valid DN and password:
//$sys_ldap_bind_dn = "eduid=1234,ou=people,dc=codendi,dc=com";
//$sys_ldap_bind_passwd = "xxxxxxxxx";

// LDAP authentication:
// Codendi only supports authentication with a attempt to bind with LDAP server
// with a DN and a password.
// As the DN is usually long (eduid=1234,ou=people,dc=codendi,dc=com) people 
// usually authenticate themself with a login. So we need to first look 
// for the DN that correspond to the given login and once found attempt to bind
// with the given password. 
// In order to autenticate successfully users you need to properly 

// User login (authentication 1st step)
$sys_ldap_uid   = 'uid';

// User unique identifier. It's probably not the uid (or login) because it
// may change. This is a value that never change whatever happens to the
// user (even after deletion). It correspond to ldap_id field in user table
// in database.
// (authentication 2st step)
$sys_ldap_eduid = 'eduid';

// User common name   
$sys_ldap_cn    = 'cn';
// User email address
$sys_ldap_mail  = 'mail';

// Specific DN to look for people
// You may use more than one DN separated by ; if you want to use several branches.
// Example : 'ou=People, dc=st, dc=com ; ou=Extranet, dc=st, dc=com'
$sys_ldap_people_dn     = 'ou=People, o=XEROX, c=US';

// Specific DN where the user groups are
$sys_ldap_grp_dn        = 'ou=Groups, o=XEROX, c=US';
// Field that reprsent group name
$sys_ldap_grp_cn        = 'cn';
// Field that indicate the membership of a user in a group
$sys_ldap_grp_member    = 'uniquemember';
// Filter used to look for user. It should cover a wide selection of
// fields because it's aim to find a user whatever it's given (email, name,
// login, etc).
$sys_ldap_search_user='(|(uid=%words%)(cn=%words%)(mail=%words%))';

// On account creation, what it the default user status (A, R, ...)
$sys_ldap_default_user_status = 'A';

// Enable LDAP based authentication for SVN by default for new projects 
$sys_ldap_svn_auth = 1;

?>