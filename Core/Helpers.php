<?php

/**
 * Require a view.
 *
 * @param string $name
 * @param array $data
 */
function view($name, $data = [])
{
  extract($data);
  return require "App/Views/{$name}.php";
}

/** Redirect to a new page. */
function redirect(string $path)
{
  header("Location: /{$path}");
}
