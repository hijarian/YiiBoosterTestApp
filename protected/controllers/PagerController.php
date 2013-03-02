<?php
/**
 * Testbed for TbPager widget
*/
class PagerController extends Controller
{
	public function actionIndex()
	{
		$raw_data = $this->makeRawData();
		$data_provider = $this->makeDataProvider($raw_data);

		$this->render('index', compact('data_provider'));
	}

	private function makeRawData()
	{
		$counter = 0;
		$data = array();
		for ($i = 33; $i < 126; ++$i)
		{
			$data[$counter] = array( 'id' => $counter, 'ord' => $i, 'char' => chr($i) );
			++$counter;
		}
		return $data;
	}

	private function makeDataProvider($raw_data)
	{
		// NOTE that this constructor sniffs upon the $_REQUEST variable for a presence of the variable named
		// by the CPagination.pageVar property. The reason is that you can request the route with the `pageVar` attribute
		// attached and when CArrayDataProvider will be fetching data by the call to `getData` it'll filter all data
		// available to it and returns only the items relevant to current "page".
		return new CArrayDataProvider(
			$raw_data,
			array(
			     'pagination' => array(
					'pageSize' => 14
			     )
			)
		);
	}
}
