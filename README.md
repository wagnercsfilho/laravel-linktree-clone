## Linktree Clone

This is a demo application built alongside a video tutorial showing how to create a [linktr.ee](https://linktr.ee) clone using the [Laravel](https://laravel.com) PHP framework.

This project comprises three simple data models and related tables:

-   **Users** are individual accounts that a person can create on the app
-   **Links** belong to a User and hold both a name and a valid URL
-   **Visits** track each click that occurs on a particular link and records the info associated with it

This demo app makes use of Laravel's default bootstrapped views and authentication routes. There's a very basic dashboard that a user is directed to after logging in where they can see their links, view the amount of visits for each, add a new link, or modify the display settings on their link page.

Visiting a particular user's links page displays a simple list of their added links, with the background color and text color they selected on their settings page.
