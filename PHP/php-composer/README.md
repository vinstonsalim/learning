# Lessons Learned

1. Composer is being use for managig PHP dependences. This avoid manual downloading and inclusion for external dependences.
2. **composer.json**: Basically it is file that specifies the projects properties, meta data, and dependencies. 
3. **Semantic Versioning** for the versioning scheme to determine compatibility between packages.
4. **Autoloading**: By implementing PSR-4 autoloading in the project, the code will be more maintainable and eliminates the need for manual `require` statements.
5. **Composer Scripts** like
   1. `composer install` to install all the dependencies, this step is required when there is no vendor folder.
   2. `composer update` to update all dependecies.
   3. `composer dump-autoload` to reload all the files and namespaces.
