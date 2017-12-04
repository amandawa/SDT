# SDT
Single Dog Terminator - Social website for people in need

Setup Env if needed (OSX):                                       
 1: Check which php path:                                         
    $root: which php                                              
 2: Check if path = /usr/bin/php, change your OSX php path:       
    $root: PATH="/Applications/XAMPP/xamppfiles/bin:${PATH}"      
 3: Install icu4c:                                                
    $root: brew install icu4c                                     
 4: Install autoconf if needed:                                   
    $root: brew install autoconf                                  
 5: Install Intl via PECL:                                        
    $root: sudo pecl update-channels                              
    $root: sudo pecl install intl                                 
 6: Add extension=php_ldap.dll in /xamppfiles/etc/php.intl        
 7: Entry in httpd.conf @ xamppfiles/apache2/conf/                
    LoadModule ldap_module modules/mod_ldap.so                    
 8: Restart Xampp        
                                          
 Reference: "https://stackoverflow.com/questions/27886117/php-intl-installation-on-xampp/32404183#32404183"   