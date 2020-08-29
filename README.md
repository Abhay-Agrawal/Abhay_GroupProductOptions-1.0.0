# GroupProductOptions Magento2 Extension
**This extension is used for group products, To show the  dynamic salabe quantity, sku, and one custom message  with color in the frontend.**

## Group Product Options Extension

A grouped product is essentially a collection of simple products that are presented as a group. Shoppers can purchase each product separately, or as a part of the group. This extension is very helpful for the admin to sell the products  in bulks.

Group products with custom options is very helpful for admin to show the child product information according to time needed.This will bring convenience to customers and enhance their shopping experience by such types of options.

# Features

* Show the child product salable Quantity
* Show the child product Sku
* Admin can add custom message with color setting

# How to install

Add the module in app/code/ folder in magento root like as app/code/Abhay/GroupProductOptions
and run the command 
```php bin/magento setup:upgrade
php bin/magento setup:di:compile
php bin/magento setup:static-content:deploy -f
php bin/magento indexer:reindex
php bin/magento cache:clean
php bin/magento cache:flush
```


![groupadmin](https://user-images.githubusercontent.com/55655451/90330563-4fe53d00-dfcb-11ea-841c-b9e59131c6a6.png)

# How to Enable 

* Navigate to STORES->Configuration in Magento Admin panel. Module Enable - Select “Yes” 
* To show child Product salable Quantity - Select “Yes”
* To show child Product sku - Select “Yes”
* Add Message - Admin can add custom messages like “HURRY UP, LIMITED TIME ONLY!”
* Message Text Color - Select color according to website need.
* Click on ‘Save Config’ to save the configuration for group product

![groupproduct](https://user-images.githubusercontent.com/55655451/90330604-a488b800-dfcb-11ea-875d-d874379a22aa.png)


# Benefits 

* Update Dynamic saleable quantity
* Better Order Experience For Grouped Products



# Check Other Magento2 Module

| Module Name | Description |
| --- | --- |
| [Custom Shipping](https://github.com/Abhay-Agrawal/Abhay_CustomShipping-1.0.0) | Custom Shipping Method For Magento Website |
| [LatestNews](https://github.com/Abhay-Agrawal/Abhay_LatestNews-1.0.0) | Add Latest News Related to product offer with content in your website |
