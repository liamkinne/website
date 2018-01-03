# Building Myself a Website

## Out With the Old

My last website was running on Wordpress which gave me more headaches than it should have. I don't know if it was the Docker image or the particular way I'd set it up, but it seemed to go down at a frequency of one a fortnight. I also found it hard to customise things without breaking stuff elsewhere. The solution? build it from scratch of course!

## Goals

- No databases (at least not locally).
- Support for writing posts in Markdown.
- Open-source for the world to see (and judge).
- Keep it simple stupid.

One thing I'm not super happy with is the fact that the server-side code is in PHP. As ironic as it is, while I hate using PHP because of it's drawbacks, it is the only server-side language I am proficient enough in to do anything properly... consider this my apology.

## Docker Love

Something that I have loved learning about and using is Docker, and specifically using docker-compose files. The one thing that often holds me back in complex projects is setting up the development environment. With Docker I can run an identical environment to what is running on the web-server and just deploy my code over GitHub.

You can go look at the [source code](https://github.com/liamkinne/website) of my website yourself.

## For the Future

In the future I want to do things like automate the deployment process with maybe a cron-job of some sort on the server side of things. One thing I want to keep in mind is to keep it simple because while having lots of features can be great, it also creates a lot of code to maintain.

Other things I'd like to add are:

- Photo gallery that displays my latest Instagram posts.
- Setup caching for resources like style scripts.
- Make automatically generated project pages for all of my GitHub repos.