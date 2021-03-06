<?php
use Migrations\AbstractMigration;

class CreateStockIn extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('stock_in');
        $table->addColumn('product_id', 'integer');
        $table->addColumn('quantity', 'integer');
        $table->addColumn('created', 'datetime');
        $table->addForeignKey('product_id', 'products', 'id');
        $table->create();
    }
}
