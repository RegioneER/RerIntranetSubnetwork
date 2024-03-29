<?php

namespace Piwik\Plugins\RerIntranetSubnetwork\Reports;

use Piwik\Piwik;
use Piwik\Plugin\ViewDataTable;
use Piwik\Plugins\RerIntranetSubnetwork\Columns\IntranetSubnetwork;

class GetIntranetSubnetwork extends Base
{
    protected function init()
    {
        parent::init();

        $this->name          = Piwik::translate('RerIntranetSubnetwork_Title');
        $this->dimension     = new IntranetSubnetwork();
        $this->documentation = Piwik::translate('RerIntranetSubnetwork_Description');

        // This defines in which order your report appears in the mobile app, in the menu and in the list of widgets
        $this->order = 1;

        // By default standard metrics are defined but you can customize them by defining an array of metric names
#        $this->metrics = [
#            'nb_visits',
#            'nb_uniq_visitors',
#            'nb_visits_percentage' => Piwik::translate('General_ColumnPercentageVisits'),
#        ];

        // Uncomment the next line if your report does not contain any processed metrics, otherwise default
        // processed metrics will be assigned
        // $this->processedMetrics = array();

        // Uncomment the next line if your report defines goal metrics
        // $this->hasGoalMetrics = true;

        // Uncomment the next line if your report should be able to load subtables. You can define any action here
        // $this->actionToLoadSubTables = $this->action;

        // Uncomment the next line if your report always returns a constant count of rows, for instance always
        // 24 rows for 1-24hours
        // $this->constantRowsCount = true;

        // If a subcategory is specified, the report will be displayed in the menu under this menu item
        // $this->subcategoryId = 'RerIntranetSubnetwork_Title';
        $this->subcategoryId = $this->name;
    }

    /**
     * Here you can configure how your report should be displayed. For instance whether your report supports a search
     * etc. You can also change the default request config. For instance change how many rows are displayed by default.
     *
     * @param ViewDataTable $view
     */
    public function configureView(ViewDataTable $view)
    {
#        if (!empty($this->dimension)) {
#            $view->config->addTranslations(array('label' => $this->dimension->getName()));
#       }

        $view->config->show_search = false;
        // $view->requestConfig->filter_sort_column = 'nb_visits';
        // $view->requestConfig->filter_limit = 10';
        // $view->config->columns_to_display = array_merge(array('label'), $this->metrics);
    }

    /**
     * Here you can define related reports that will be shown below the reports. Just return an array of related
     * report instances if there are any.
     *
     * @return \Piwik\Plugin\Report[]
     *
    public function getRelatedReports()
    {
        return array(); // eg return array(new XyzReport());
    }
    */

    /**
     * A report is usually completely automatically rendered for you but you can render the report completely
     * customized if you wish. Just overwrite the method and make sure to return a string containing the content of the
     * report. Don't forget to create the defined twig template within the templates folder of your plugin in order to
     * make it work. Usually you should NOT have to overwrite this render method.
     *
     * @return string
    public function render()
    {
        $view = new View('@RerIntranetSubnetwork/getIntranetSubnetwork');
        $view->myData = array();

        return $view->render();
    }
    */

    /**
     * By default your report is available to all users having at least view access. If you do not want this, you can
     * limit the audience by overwriting this method.
     *
     * @return bool
    public function isEnabled()
    {
        return Piwik::hasUserSuperUserAccess()
    }
     */

/**
    public function configureWidgets(WidgetsList $widgetsList, ReportWidgetFactory $factory)
    {
        // we have to do it manually since it's only done automatically if a subcategoryId is specified,
        // we do not set a subcategoryId since this report is not supposed to be shown in the UI
        $widgetsList->addWidgetConfig($factory->createWidget());
    }
*/
}
