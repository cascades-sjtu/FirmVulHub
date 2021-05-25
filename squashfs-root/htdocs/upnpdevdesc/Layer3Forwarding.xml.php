<? echo "<\?xml version=\"1.0\"?\>"; ?>
<scpd xmlns="urn:schemas-upnp-org:service-1-0">
	<specVersion>
		<major>1</major>
		<minor>0</minor>
	</specVersion>
	<actionList>
		<action>
			<name>GetDefaultConnectionService</name>
			<argumentList>
				<argument>
					<name>NewDefaultConnectionService</name>
					<direction>out</direction>
					<relatedStateVariable>DefaultConnectionService</relatedStateVariable>
				</argument>
			</argumentList>
		</action>
		<action>
			<name>SetDefaultConnectionService</name>
			<argumentList>
				<argument>
					<name>NewDefaultConnectionService</name>
					<direction>in</direction>
					<relatedStateVariable>DefaultConnectionService</relatedStateVariable>
				</argument>
			</argumentList>
		</action>
	</actionList>
	<serviceStateTable>
		<stateVariable sendEvents="yes">
			<name>DefaultConnectionService</name>
			<dataType>string</dataType>
		</stateVariable>
	</serviceStateTable>
</scpd>
