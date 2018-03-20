# Flysystem Adapter Tests

I am testing a couple of different [Flysystem](http://flysystem.thephpleague.com/) Adapters (mainly AWS S3 V3 and Local).

## TLDR;

After cloning this repo, do these steps:

```
# You will need to fill in .env with your settings.
cp env.sample .env

# Leave it alone, or tweak it to suit you
cp example.phpunit.xml phpunit.xml

composer update
phpunit

```

## Add a new Adapter

Edit the top of bootstrap/filesystem.php and add a Use statement, similar to
the other adapters that are mentioned there:



## Under construction

I am testing AWS S3 V3, so I am mostly testing that. I will fill this out more when I have time to test others. 