<?php

namespace controllers;

use controllers\Controller;

/**
 * Page controller
 */
class Page extends Controller
{
    // default pages + paths
    public string $defaultPage = 'error';

    public ?string $page = null;
    public ?string $pageName = null;
    public ?string $viewPath = null;
    public ?string $modulePath = null;

    /**
     * constructor
     * set default paths + page
     */
    public function __construct()
    {
        $this->page = $this->defaultPage;
        $this->pageName = 'Home';
        $this->viewPath = '../views/content/' . $this->defaultPage . '/index.view.php';
        $this->modulePath = '../app/modules/site/' . $this->defaultPage . '.php';
    }

    /**
     * sets a new page to be loaded
     * @param string $page
     * @return void
     */
    public function setPage(string $page): void
    {
        // does the page meet all requierements?
        if ($this->pageExists($page)) {

            // set the current page
            $this->page = $page;

            // set page information
            $this->pageName = $this->getPageName();
            $this->setViewPath();
            $this->setModulePath();
        } else {

            // set default page to error
            $this->page = $this->defaultPage;
        }
    }

    /**
     * returns boolean whether a page meets all requierements or not
     * @param string $page
     * @return bool
     */
    private function pageExists(string $page): bool
    {
        // parameter given?
        if (empty($page)) {
            return false;
        }

        // page given?
        if (!file_exists($page . '.php')) {
            return false;
        }

        // page view exist?
        if (!file_exists('../views/content/' . $page . '/index.view.php')) {
            return false;
        }

        return true;
    }

    /**
     * sets the current pages view path
     * @return void
     */
    private function setViewPath(): void
    {
        $this->viewPath = '../views/content/' . $this->page . '/index.view.php';
    }

    /**
     * sets the current pages module path
     * @return void
     */
    private function setModulePath(): void
    {
        // check if the page has a module
        if (file_exists('../app/modules/site/' . $this->page . '.php')) {
            // set module path
            $this->modulePath = '../app/modules/site/' . $this->page . '.php';
        }
    }

    /**
     * returns the current page name
     * @return string
     **/
     private function getPageName(): string
     {
         return match ($this->page) {
             'error' => 'Fehler',
             'about' => 'Über uns',
             default => 'Home',
         };
     }
}