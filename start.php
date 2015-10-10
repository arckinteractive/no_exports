<?php
/**
 * No Exports
 *
 * Prevents users from accessing /export endpoints. These endpoints can expose data like:
 *	Annotations
 *	Metadata
 *	Relationships
 *
 * In many cases, there is no need for these to be exposed. In extreme cases--especially with
 * relationships--this can lead to unintentional data exposure.
 */