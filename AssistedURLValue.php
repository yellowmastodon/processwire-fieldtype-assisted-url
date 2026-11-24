<?php  namespace ProcessWire;
/**
 * Value object for FieldtypeAssistedURL
 *
 * echo $page->link          -> URL string
 * $page->link->url          -> URL string
 * $page->link->isPage       -> bool
 * $page->link->id           -> page id or 0
 */
class AssistedURLValue extends WireData {

    public function __construct($url = '', $id = 0) {
        parent::__construct();
        $id = (int) $id;
        $this->set('url', (string) $url);
        $this->set('id', $id);
        $this->set('isPage', $id > 0);
    }

    public function isEmpty() {
        return $this->get('url') === '';
    }

    public function __toString() {
        return (string) $this->get('url');
    }
}