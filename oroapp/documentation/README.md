
About products:
* Product attribute has to be added to product family prior to its usage;
* **Changing of a product family for a product is highly unrecommended;**
* New fields can be added to products frontend gird either by  adding them to search index and then adding them to the grid (select and column/property are required) or using result after event (column/property are required );






the most used commands:
- 
* for clear chache
```
rm -rf var/cache/*
php bin/console cache:clear
php bin/console cache:clear --env=prod
```

